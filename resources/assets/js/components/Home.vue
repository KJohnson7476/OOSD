<template>
    <div class="container">
        <div class="row pull-right">
            <router-link to="/create" tag="li">
                <a class="btn btn-primary">New Task</a>
            </router-link>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <div v-if="loading">loading...</div>
                <div class="panel panel-default" v-for = "task in tasks">
                    <div @click="deleteIt(task.id)" class="btn pull-right"><i class="fa fa-times"></i></div>
                    <div @click="editTask(task.id)" class="btn pull-right"><i class="fa fa-pencil"></i></div>

                    <form @submit.prevent="updateIt(task.id)">
                        <div class="panel-heading">
                           <span v-show="!showForm(task.id)"> {{ task.name }} </span>
                           <input style="width: 200px" v-show="showForm(task.id)" type="text" class="form-control" v-model="taskEditData.name"/>
                        </div>

                        <div class="panel-body">
                            <span v-show="!showForm(task.id)"> {{ task.body }} </span>
                            <input v-show="showForm(task.id)" type="text" class="form-control" v-model="taskEditData.body"/>

                            <!--Assigned by {{ task.user.name }}-->
                            Assigned by don't worry about it
                            <!--{{Auth::user()->name}}-->


                        </div>

                        <button class="btn btn-primary" type="submit" v-show="showForm(task.id)">Ok</button>
                        <button class="btn btn-default" @click.prevent="editForm=false" v-show="showForm(task.id)">Cancel</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                tasks:[],
                loading:false,
                editForm:"",
                taskEditData:{name:'', body:''}
            }

        },
        methods:{

            editTask(taskId) {
                this.tasks.forEach((task,i)=>{
                    if (task.id == taskId) {
                        this.taskEditData=task;
                    }
                });


                return this.editForm = taskId;
            },
            showForm(taskId) {
                if (this.editForm == taskId) {
                    return true;
                }
                return false;
            },
            updateIt(taskId) {
                axios.put('task/' + taskId, this.taskEditData)
                    .then(response=>{
                        console.log(response);
                        this.editForm=false;
                        this.taskEditData="";
                        this.$router.push('/');
                    })
                    .catch(error=>{
                        console.log(error.response);
                    })
            },
            deleteIt(taskId) {
                let ok=confirm("Delete Task?");
                if (ok) {
                    axios.delete('task/' + taskId).then(response=>{
                        console.log(response);
                        this.fetchIt();
                    });
                }
            },
            fetchIt() {
                this.loading = true;

                axios.get('task').then((response)=>{this.tasks=response.data, this.loading = false});
            }

        },

        mounted() {
            this.fetchIt();
//            this.loading = true;
//
//            axios.get('task').then((response)=>{this.tasks=response.data, this.loading = false});
            
        }
    }
</script>
