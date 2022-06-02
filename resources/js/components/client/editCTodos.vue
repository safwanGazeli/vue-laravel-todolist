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

  
  <div class="p-6 ">
  <div class="rounded-lg bg-white shadow-lg">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">Edit Category Information</h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-500">Edit detail info about category and number of order with image.</p>
    </div>
    <div class="border-t border-gray-200"></div>
  <form id="form" class="p-10">

    <div class="form-group mb-6">
      <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">Message</label>
      <input label="message" v-model="message" type="text" placeholder="Enter message name..." class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        >
    </div>

    <div class="form-group mb-6">
      <div  v-for="file in files" :key="file.id">
          <label > ( {{file.id}} ) :</label>
          <label > {{ file.name }}</label>
      </div>
    </div>

    
     <div class="form-group mb-6">
      <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">Choose Number from List of File above</label>
      <input label="file_upload_id" v-model="file_upload_id" type="number" placeholder="Enter File number..." class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        >
    </div>


      <!-- <input label="user_id" v-model="user_id" type="hidden" placeholder="Enter message name..." class="form-control"> -->

    
    
<div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
  <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 " stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
      <div class="flex text-sm text-gray-600">
                      <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span>Upload a file</span>
                        <!-- <input id="file-upload" name="file-upload" type="file" class="sr-only" @change="onFileSelected" /> -->
                        <input id="upload-file" type="file" class="form-control" @change="fieldChange" multiple>
          </label>
      </div>
      </div>
      </div>

      <div class="px-4 py-3 text-right sm:px-6">
              <button  type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"  v-on:click="uploadFile()">Save</button>
      </div>
  </form>
</div>


</div>
</div>
</template>

<script>

export default {

    props: ['todo'],
    data() {
      return {
        files: [],
      }
    },
    data: function() {
      return {
        user_id: this.todo.user_id,
        message: this.todo.message,
        image: this.todo.image,
        file_upload_id: this.todo.file_upload_id,
        attachments:[],
        files: [],
        form: new FormData,
        _token: "{{ csrf_token() }}",
      }
    },

    methods: {
         logout(){
            axios.post('/api/logout').then(()=>{
                this.$router.push({ name: "Login"})
            })
        },
        getFiles() {
       axios.get('http://localhost:8000/api/files').then(response => {
         if(response.status >= 200 && response.status <300){
           this.files = response.data.files
         }
       })
     },
        fieldChange(e){
                let selectedFiles=e.target.files;

                if(!selectedFiles.length){
                    return false;
                }

                for(let i=0;i<selectedFiles.length;i++){

                    this.attachments.push(selectedFiles[i]);
                }
                
                console.log(this.attachments);


            },
            uploadFile(){

                this.form.append("message", this.message);
                this.form.append("is_complete", this.is_complete);
                this.form.append("user_id", this.user_id);
                this.form.append("file_upload_id", this.file_upload_id);
                for(let i=0; i<this.attachments.length;i++){
                    this.form.append('pics[]',this.attachments[i]);
                }

                const config = { headers: { 
                    'Content-Type': 'multipart/form-data'
                      }};

                document.getElementById('upload-file').value=[];

                axios.post('http://localhost:8000/api/update/todo/' + this.todo.id ,this.form,config).then(response=>{
                    //success
                    console.log(response);
                    this.$router.push({ name: "UserDash"})
                })
                    .catch(response=>{
                        //error
                    });

            }
  },
    mounted() {
     this.getFiles(),
     console.log('Component mounted.')
   }, 


}
</script>

<style>

</style>