
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="app/css/style.css">
   
    <title>ইন্সট্রাকশন পেজ</title>
</head>
<body>
 
   <div class="container">
   
     <div class="body_banner">
        <div class="row">
                <div class="col-md-12"> 
                   
                    <button type="button" class="btn btn-primary"><a href="{{url('/home')}}">রেজিস্ট্রেশন করুন</a></button>
                    <table class="table" border="1px">
                        <thead>
                          <tr>
                            <th scope="col">নাম</th>
                            <th scope="col">নাম্বার</th>
                            <th scope="col">ই-মেইল</th>
                            <th scope="col">এস.এস.সি ব্যাচ</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $item)
                          <tr>
                            <th scope="row">{{ $item->name }}</th>
                       
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->email }}</td>
                            <td>SSC {{ $item->batch }}</td>
                            
                          </tr>  
                          @endforeach
                            
                        </tbody>
                      </table>
                    

<hr>
<br>
                <div class="container">
                <div class="body_banner footer">
                    <div class="row">
                    <div class="footer">
                    <p>Copyright &copy; 2023 Design $ Developed by Imtiaz Technologies</p>
                </div>
                    </div>
                </div>
            </div>
            </footer>


    <!---Js here-->

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


<script src="../js/main.js"></script>
</body>
</html>





