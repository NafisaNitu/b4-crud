<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add product</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.css')}}">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <div class="navbar-nav">
            <li><a href="" class="nav-link">Add Product</a></li>
            <li><a href="" class="nav-link">Manage Product</a></li>
            <li><a href="" class="nav-link">JavaScript</a></li>
        </div>
    </div>
</nav>

<section class="pu-5 bg-light">

    @include('includes.color-change');
    @include('includes.image-change');

    <h1 id="h1"></h1>
    <div id="content"></div>

    <script>
        /*  a block of code */

        var students = [
            {name: 'santo', phone: '0123456789', email: 'santo@gmail.com'},
            {name: 'Arif', phone: '023456789', email: 'Arif@gmail.com'},
            {name: 'Sudipto', phone: '01456789', email: 'Sudipto@gmail.com'},
            {name: 'Jenifer', phone: '012356789', email: 'Jenifer@gmail.com'},
            {name: 'sazzad', phone: '03456789', email: 'sazzad@gmail.com'},
        ];

        for(index in students)
        {
            document.write('Student name: '+students[index].name+'student phone:'+students[index].phone+'email:'+students[index].email+'<br>');
        }


        // function createDiv(height, width, color) {
        //     var div = document.createElement('div');
        //     div.style.height = height+'px';
        //     div.style.width = width+'px';
        //     div.style.backgroundColor = color;
        //     // div.style.borderRadius = '50%';
        //     div.style.float = 'left';
        //     div.setAttribute('id', 'colorDiv');
        //
        //     console.log(div);
        //
        //     var content = document.getElementById('content');
        //     content.append(div);
        //
        // }
        //
        // createDiv(300,400,"red");
        // createDiv(200,100,"green");
        // createDiv(300,150,"gray");
        // createDiv(500,300,"black");



        // var firstName = 'sawon';
        // var lastName = 'Akter';
        //
        // function printName() {
        //     Document.write(firstName+' '+lastName);
        // }
        // printName();

        // getResult(10,2);
        //
        // function getResult(firstNumber, lastNumber) {
        //     document.write(firstNumber - lastNumber+'<br>');
        // }
        // getResult(100,50);

        // function getFullName(firstName, lastName) {
        //     var fullName = firstName+' '+lastName;
        //     // var h1Element = document.getElementById('h1');
        //     // h1Element.innerHTML = fullName;
        //     document.getElementsByTagName('h1')[0].innerHTML = fullName;  //by tag
        // }
        // getFullName("Habibur", "Rahman");


        // function name() {
        //     // Document.write('tarek');
        //     alert("hello world");
        // }
        //
        // name();


        // var data = ['shila', 'sadia', 100, 10.25, false, 'bitm', true, 'bangladesh', 200, 25.30];
        //
        // // document.write(data.length);
        // //
        // // document.write(data);
        //
        // for (key in data)
        // {
        //     if(key > 1 )
        //         // if(data[key] == 'bangladesh' )
        //     {
        //         document.write(data[key]+'<br>');
        //         // document.write(key+'<br>');
        //     }
        //
        //     {
        //         document.write(data[key]+'<br>');
        //     }
        //     // document.write(data[index]+'<br>');
        // }

        // document.write(data[6]);

        // var name = new array();


        // var firstName = 'Sanjida';
        // var lastName = 'Akter';
        //
        // document.write(firstName+''+lastName);



            // document.write('Hello World');
           // major rules for variable
                // * start with var
                // * a-z, A-Z, 0-9, $
                // * no number in first

        // var name = 'santo';
        // var 22street = '22 street';
        // var Bangladesh = "Hello bangladesh";
        // var arif_name = 'His name is Arif';
        // var hello-jenifer = "Hello jenifer";

            // document.write(name);

        // var name = 10;
        // var bitm = 'bitm';
        // var price = 100.00;
        //
        // document.write(typeof(price));


    </script>

</section>

<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
</body>
</html>
