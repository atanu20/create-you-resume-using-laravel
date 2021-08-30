<x-layout>
    <x-slot name="title">Login Now</x-slot>
    <x-slot name="content">
    
       <div class="login">
           <div class="container">
               <div class="row">
                   <div class="col-md-6 col-12 mx-auto">
                       <div class="card p-3">
                       @if(session('error'))
                            <div class="alert alert-info alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{session('error')}}
                            </div>
                            @endif
                           <h3 class="text-center">Login Now</h3>

                           <form action="" method="POST">
                               @csrf
                           <div class="form-group">
                                    <label for="">Email address:</label>
                                    <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                          </div>
                          <div class="form-group">
                            <label for="">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                        </div>

                        <div class="formbox">
                            <a href="/register">Create an Account </a>
                            <button type="submit" class="btn btn-dark">Login</button>
                        </div>


                           </form>

                       </div>
                   </div>
               </div>
           </div>
       </div>
    </x-slot>
   
</x-layout>