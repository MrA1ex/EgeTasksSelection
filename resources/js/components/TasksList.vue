<template>
    <div class="tasks-list">

        <div class="control-panel print">
            <div class="control">
                Введите количество заданий (всего {{maxTask}}):
                <input class="input is-small" type="number" :value="amountTasks" min="1" :max="maxTask" @keydown="inputCheck" @keyup="setAmountTask" @click="setAmountTask">
            </div>
            <label class="checkbox">
                Ответы
                <input type="checkbox" v-model="checkAnswer">
            </label>
            <button class="button is-small is-primary" @click="print">Печать</button>
        </div>

        <Loading v-if="loading"></Loading>

        <template v-for="(task, index) in tasks">
            <div :key="task.id" class="box" v-if="(index + 1 <= amountTasks)">
                <article class="media">
                    <div class="media-left">
                        <div class="num-task">{{index + 1}}</div>
                    </div>
                    <div class="media-content">
                        <div class="content">
                            <strong>Задание {{task.theme_id}}</strong>
                            <p>{{task.description}}</p>
                            <p class="print" v-if="checkAnswer">{{task.answer}}</p>
                        </div>
                    </div>
                    <div class="media-right">
                        <span v-show="!(maxTask == amountTasks)" class="icon is-small has-text-primary" @click="replaceTask(index)">
                            <i class="fas fa-sync-alt icon-replace print" title="Заменить"></i>
                        </span>
                        <span class="icon is-small has-text-primary" @click="deleteTask(index)">
                            <i class="fas fa-trash-alt icon-delete print" title="Удалить"></i>
                        </span>
                    </div>
                </article>
            </div>
        </template>

        <div class="answer">
            <div class="content">
                <h2>Ответы</h2>
            </div>
            <template v-for="(task, index) in tasks">
                <div :key="task.id" class="answer-box" v-if="(!task.delete) && (index + 1 <= amountTasks)">
                    <article class="media">
                        <div class="media-left">
                            <div class="num-task">{{index + 1}}</div>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>{{task.answer}}</p>
                            </div>
                        </div>
                    </article>
                </div>
            </template>
        </div>

    </div>
</template>

<script>
    import axios from 'axios';
    import Loading from "./Loading";

    export default {
        name: 'TaskList',
        props: ['load-url'],
        components: {
            Loading,
        },
        data() {
            return {
                tasks: [],
                resultTasks: [],
                loading: true,
                checkAnswer: false,
                maxTask: 0,
                amountTasks: 0,
                countRep: 0,
                success: ''
            }
        },
        methods: {
            loadTasks() {
                this.loading = true;
                axios.get(this.loadUrl)
                    .then(response => {
                        this.tasks = response.data;
                        this.maxTask = this.tasks.length;
                        this.amountTasks = this.maxTask;
                        this.loading = false;
                    })
                    .catch(err => {
                        console.log(err);
                        this.loading = false;
                    });
            },
            inputCheck(event){
                if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode !== 8) || (parseInt(event.target.value + event.key, 10) > this.maxTask) || (parseInt(event.target.value + event.key, 10) < 1))
                    event.preventDefault();
            },
            setAmountTask(event){
                this.amountTasks = event.target.value;
                this.replace = this.maxTask !== this.amountTasks;
            },
            deleteTask(index) {
                this.tasks.splice(index, 1);
                this.amountTasks -= 1;
                this.maxTask -= 1;
            },
            replaceTask(index) {
                if (this.countRep + parseInt(this.amountTasks, 10) >= this.maxTask)
                    this.countRep = 0;
                this.tasks[index] = this.tasks.splice(parseInt(this.amountTasks, 10) + this.countRep, 1, this.tasks[index])[0];
                this.countRep += 1;
            },
            print(){
                window.print();
            }
        },
        created() {
            setTimeout(this.loadTasks, 100);
        }
    }

</script>

<style scoped>
    @media screen {
        .answer {
            display: none;
        }
    }

    @media print {
        .print{
            display: none;
        }
        .box {
            box-shadow: none;
            page-break-inside: avoid;
        }
        .answer-box{
            margin-left: 5px;
            margin-bottom: 2px;
        }
        .answer{
            display: none;
            display: block;
            page-break-before: always;
        }
    }
    .box{
        margin-bottom: 10px;
    }
    .icon-replace:hover {
        color: #4657f1 !important;
        cursor: pointer
    }
    .icon-delete:hover {
        color: #f14668!important;
        cursor: pointer
    }
    .control{
        display: flex;
    }
    .control p{
        display: flex;
    }
    .control input{
        width: 75px;
        margin-left: 5px;
    }
    .control-panel{
        width: 100%;
        height: 75px;
        margin-bottom: 15px;
        border: 2px solid #dbdbdb;
        padding: 5px;
        position:relative;

    }
    .control-panel button{
        display: inline-block;
        position:absolute;
        bottom:5px;
        right:5px;
    }
</style>
