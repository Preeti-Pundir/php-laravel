<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
           All Category <b>  All Category </b>
            <b
                style = "float:right;" > Total users
                <span class =" bagde badge-danger"> 

                </span>
            </b>
        </h2>
    </x-slot>

    <div class="py-12">
        
    <div class ="container">
        <div class = "row">
        <div class = "col-md-8">
            <div class ="card">
                <div class ="card-header"> All category</div>

            




        <table class="table">
  <thead>
  <tr>
      <th scope="col">SL No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">create_at </th>
    </tr>
  </thead>
  <tbody>
           
    <tr>
      <th scope="row"> </th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
   

  </tbody>
</table>
        </div>
            
        <div class = "col-md-4">
            <div class ="card">
                <div class ="card-header"> Add category </div>
                <div class ="card-body">  
                <br>
                <form action ="{{route('store.category')}}" method = 'post'>
                    @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                    <br>
                    <input type="text" name ="category_name" class="form-control"
                     id="exampleFormControlInput1" placeholder=" ">
                     @error('category_name')
                         <span class='text-danger'>{{$message}}</span>
                     @enderror
                     <br>
                   <!-- </div> -->
                    <br>
                    <botton type="submit" class="btn btn-primary"> Add category</botton>
              
                    </div>

                    </div>    
                        
                        
                </form>
                </div>

            </div>
        </div>



        </div>


    </div>
</x-app-layout>
