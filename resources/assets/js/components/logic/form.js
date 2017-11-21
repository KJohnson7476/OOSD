export default {
    data() {
        return {
            taskData:{
                name:'',
                body:'',
            },
            errors:{}
        }
    },
    methods:{
        addTask() {
            axios.post('task', this.taskData)
                .then(response=>{
                    console.log(response)
                    this.taskData = "";
                    this.errors="";
                    this.$router.push('/');
                })
                .catch(error=>{
                    console.log(error.response);
                    this.errors=error.response.data;
                })
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}