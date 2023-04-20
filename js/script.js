const { createApp } = Vue;

createApp({

  data() {
    return {
      todos: [],

      newTodo: '',
    }
  },

  methods: {
    getTodos() {

      axios.get('./server.php').then(response => {
        this.todos = response.data;
      });
    },


    addTodo() {

      let data = {
        newTodo: '',
      }
      
      // console.log(data);

      data.newTodo = this.newTodo;

      // console.log(data.newTodo.name);

      axios.post('./server.php', data, {headers: {'Content-Type': 'multipart/form-data'}}).then(response => {
        console.log("La chiamata POST ha avuto successo");
        // console.log(response);

        this.getTodos();
      });

      // console.log(this.newTodo);
      this.newTodo = "";
    },
      // console.log(this.newTodo);
  },


  mounted() {
    this.getTodos();
  },

}).mount('#app');