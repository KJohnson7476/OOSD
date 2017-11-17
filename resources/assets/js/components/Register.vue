<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
                        <form @submit.prevent="registerUser">


                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" v-model="registerData.name" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" v-model="registerData.email" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" v-model="registerData.password" required>

                                </div>
                            </div>

                            <!--<div class="form-group">-->
                                <!--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>-->

                                <!--<div class="col-md-6">-->
                                    <!--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>-->
                                <!--</div>-->
                            <!--</div>-->

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                registerData:{
                    name:"",
                    email:"",
                    password:""
                }
            }
        },

        methods:{
            registerUser() {

                console.log('register.vue');
                console.log(this.registerData.name);
                console.log(this.registerData.email);
                console.log(this.registerData.password);
                console.log(this.registerData.token);
                console.log(this.registerData);


//                axios.post('registerThis', this.registerData)
//                    .then(response=>{
//                        console.log(response);
//                    })
//                    .catch(error=>{
//                        console.log(error.response);
//                    })

//                axios.post('register', this.registerData)
//                    .then(response=>{
//                        console.log(response)
//                        this.taskData = "";
//                        this.errors="";
//                        this.$router.push('/');
//                    })
//                    .catch(error=>{
//                        console.log(error.response);
//                        this.errors=error.response.data;
//                    })
                axios.post('registerThis', this.taskData)
                    .then(response=>{
                        console.log(response)
                        this.registerData = "";
                        this.$router.push('/');
                    })
                    .catch(error=>{
                        console.log(error.response);
                        this.errors=error.response.data;
                    })
            }
        }

    }
</script>

