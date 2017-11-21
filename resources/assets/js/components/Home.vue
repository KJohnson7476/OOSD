<script src="./logic/home.js"></script>
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

                            <br />
                            <br />
                            Assigned by {{ task.user.name }} on {{task.created_at }}

                        </div>

                        <button class="btn btn-primary" type="submit" v-show="showForm(task.id)">Ok</button>
                        <button class="btn btn-default" @click.prevent="editForm=false" v-show="showForm(task.id)">Cancel</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</template>

