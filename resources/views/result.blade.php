<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link href="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::asset('backend/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
     
    </head>
    <body>
        <!--background image-->
      
        <div class="container mt-5">
            <div class="row ">
                <div class="col text-center text-black text-white">
                    <h1><b>View Result</b></h1>
                </div>

            </div>
            <div class="row d-flex justify-content-center text-white  ">
                <div class="col-10 text-white mt-5">
                    <table class="table table-striped table-dark text-center ml-4">
                        <thead>
                          <tr>
                            <th scope="col">Sl no.</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Phone no.</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <!--data fetch querry-->
                            @php($i=1);
                            @isset($contact)
                            @foreach ($contact as $item)
                          <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$item->username}}</td>
                            <td>{{$item->emailadd}}</td>
                            <td>{{$item->phno}}</td>
                            <td>{{$item->message}}</td>
                            <td>
                              <a href="#"><i class="fa fa-trash fa-2x mr-4 text-danger " aria-hidden="true" ></i></a>
                              <a href="{{route('contact.edit', $item->id)}}"><i class="fa fa-pencil-square-o fa-2x ml-2 text-success" aria-hidden="true"></i></a>

                              
                            </td>
                          </tr>
                          @endforeach
                          @endisset
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>















































>
    
