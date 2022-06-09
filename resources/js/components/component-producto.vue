<template>
  <div class="container">

        <br>
        <div class="row">

          <div class="col-md-8 order-md-1">

            <h4 class="mb-3">Modulo Producto</h4>

            <div class="form-group">
                   <label for="exampleFormControlInput1">Nombre del Producto</label>
                   <input type="text" class="form-control" id="exampleFormControlInput1" >
                 </div>
                 <div class="form-group">
                   <label for="exampleFormControlTextarea1">Descripcion</label>
                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                 </div>
                 <div class="form-group">
                   <label for="exampleFormControlTextarea1">Precio</label>
                   <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                   </div>
                 </div>

                 <div class="form-group">
                   <label for="exampleFormControlSelect1">Categoria</label>
                   <select class="form-control" id="exampleFormControlSelect1">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                     <option>5</option>
                   </select>
                 </div>

                 <div class="form-group">
                    <label for="exampleFormControlInput1">Imagen</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1"  >
                  </div>
          </div>
        </div>

  </div>  
</template>

<script>
    export default {
        data(){
          return{
            listCat:[],
            campoName:'Hamburguesa',
            campoDescription:'Descripcion de Hamburguesa',
            campoPrice:'4500',
            campoCategoria:0, 
            picFile:null
          }
        },
        mounted() {
        },
        methods:{

        }
    }
</script>