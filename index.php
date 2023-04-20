<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ToDo Json</title>

   <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

   <!-- axios -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
   <!-- vue 3 -->
   <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>

  <div id="app">

    <div class="bg-dark">
      <div class="container pt-3 m-auto text-center">
        <h1 class="text-light">ToDo List</h1>
        <div class="container pt-3 pb-3 text-start">
          <ul class="list-group">
            <li v-for="todo in todos" class="list-group-item">{{ todo }}</li>
          </ul>
        </div>
        <div class="d-flex align-center justify-content-center pb-5 p-2">
          <input v-model="newTodo" @keyup.enter="addTodo()" type="text" placeholder="Aggiungi ToDo" class="me-3">
          <button @click="addTodo()" class="btn btn-light">Aggiungi</button>
        </div>
      </div>
    </div>


  </div>
  
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <!-- main  -->
  <script src="js/script.js"></script>
</body>
</html>