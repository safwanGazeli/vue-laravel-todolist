<template>

<div>
            <!-- navbar -->
<div>
      <nav class="navbar navbar-expand-lg shadow-md py-2 bg-white relative flex items-center w-full justify-between">
      <div class="px-6 w-full flex flex-wrap items-center justify-between">
        <div class="flex items-center">
          <button
            class="navbar-toggler border-0 py-3 lg:hidden leading-none text-xl bg-transparent text-gray-600 hover:text-gray-700 focus:text-gray-700 transition-shadow duration-150 ease-in-out mr-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContentY"
            aria-controls="navbarSupportedContentY"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fas"
              class="w-5"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"
            >
              <path
                fill="currentColor"
                d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
              ></path>
            </svg>
          </button>
          <a class="navbar-brand text-blue-700" href="#!">
            <h1>Firesell TodoList</h1>
          </a>
        </div>
  
        <div class="flex items-center lg:ml-auto">
          <button type="button" class="inline-block px-6 py-2.5 mr-2 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light"  @click="() => this.$router.push('/userDashboard')">Dashboard</button>
          <button type="button" class="inline-block px-6 py-2.5 mr-2 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light"  @click="() => this.$router.push('/addCTodos')">Add Task</button>
          <button type="button" class="inline-block px-6 py-2.5 mr-2 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" @click.prevent="logout">Logout</button>
        </div>
      </div>
    </nav>
    </div>

     <!-- end navbar -->

      <div class="p-6">
      <div class=" rounded-lg bg-gray-500 shadow-lg">
      <div class="">
      <div class="">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class=" inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">
            <table class=" rounded-lg bg-gray-500 shadow-lg min-w-full text-center">
              <thead class="border-b bg-white-800">
                <tr>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                    message
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                    Task Status
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                    Action
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                    Action
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                    Mark as Complete
                  </th>
                </tr>
              </thead>
              <tbody v-for="todo in todos" :key="todo.id">
                <tr class="bg-white border-b" v-if="user_id == todo.user_id">
                  <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                    {{ todo.message}}
                  </td>
                  <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                    <div v-if="todo.is_complete == '1'">
                      <h1> Complete </h1>
                    </div>
                    <div v-else>
                      <h1> Not Complete </h1>
                    </div>
                  </td>
                  <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                    <div class="flex space-x-2 justify-center">
                      <button
                        v-on:click="() => $router.push({name: 'editCTodos', params: {todo} })"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        class="inline-block px-6 py-2.5 bg-yellow-300 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                      >Edit</button>
                    </div>
                  </td>
                  <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                    <div class="flex space-x-2 justify-center">
                      <button
                        v-on:click="deleteTodo(todo.id)"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                      >Delete</button>
                    </div>
                  </td>
                  <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                    <div class="flex space-x-2 justify-center">
                       
                        <div v-if="todo.is_complete == 1">           
                        <input type="checkbox" v-model="todo.active" @click="checkboxToggle(todo)" checked>
                         </div>
                        <div v-else> 
                           <input type="checkbox" v-model="todo.active" @click="checkboxToggle(todo)" >
                         </div>
                         <!-- status {{todo.active}} -->
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
        </div>
      </div>
    </div>
</div>

</template>

<script setup>
 export default {

  props: ['app'],
   data() {
     return {
       user_id: this.$userId,
       todos: [],
      //  todoss: this.attributes,
       url: window.location.origin,
       _token: "{{ csrf_token() }}",
     }
   },
   methods: {
    logout(){
            axios.post('/api/logout').then(()=>{
                this.$router.push({ name: "Login"})
            })
        },
     getTodos() {
       axios.get('http://localhost:8000/api/todos').then(response => {
         if(response.status >= 200 && response.status <300){
           this.todos = response.data.todos
         }
       })
     },

     deleteTodo(id) {
         axios.get('http://localhost:8000/api/delete/todo/'+id).then(response => {
         if(response.status >= 200 && response.status <300){
           alert(response.data.message)
           this.getTodos()
         }
       })
     },

      checkboxToggle (todo) {
                axios.put(`http://localhost:8000/api/${todo.id}/active`, {
                        active: !todo.active
                    }).then((response) => {
                        console.log(response)
                    })
            }
    },
   mounted() {
     this.getTodos(),
     console.log('Component mounted.')
   }, 
 }
</script>