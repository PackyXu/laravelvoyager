<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <title>Student Info</title>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Student Info List:</h1>
        <div class="col-md-8 col-md-offset-2">
            <div class="list-group">
                
                    @foreach($studentInfo as $key=>$student)
                   
                        @if($key%2 == 1)
                        <div class="list-group-item list-group-item-info">
                
                            {{ $student->id }}
                            {{ $student->name }}
                            {{ $student->sex }}
                            {{ $student->phone }}
                            {{ $student->email }}
                        </div>
                        @else
                        <div class="list-group-item">
                
                            {{ $student->id }}
                            {{ $student->name }}
                            {{ $student->sex }}
                            {{ $student->phone }}
                            {{ $student->email }}
                        </div>
                        @endif
                        
                    @endforeach
                
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-8 col-md-offset-2">
            {{ $studentInfo->render() }}
        </div>
    </div>
    
</div>


</body>
</html>