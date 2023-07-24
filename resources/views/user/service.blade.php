<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <style>
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background: #7f9ead;
            overflow: hidden;
            float: left;
            padding-left: 6%;
        }

        .card{
            position: relative;
            width: 300px;
            height: 200px;
            border-radius: 20px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.5);
            transition: 0.3s;
            padding: 30px 50px;
            background: #fff;
            cursor: pointer;

            
        }
        .card:hover{
            height: 400px;
        }

        .imgbox{
            position: relative;
            width: 100%;
            height: 100%;
            transform:translateY(-90px);
            z-index: 99;
           

        }

        img{
            width: 100%;
            border-radius: 15px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.5);

        }

        .content{
            padding: 10px 20px;
            text-align: center;
            transform: translateY(-400px);
            opacity: 0;
            transition: 0.3s;
        }

        .card:hover >.content{
            
            opacity: 1;
            transform: translateY(-300px);
        }



        .card2{
            position: relative;
            width: 300px;
            height: 200px;
            border-radius: 20px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.5);
            transition: 0.3s;
            padding: 30px 50px;
            background: #fff;
            cursor: pointer;

            
        }
        .card2:hover{
            height: 400px;
        }

        .imgbox2{
            position: relative;
            width: 100%;
            height: 100%;
            transform:translateY(-90px);
            z-index: 99;
           

        }

        img{
            width: 100%;
            border-radius: 15px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.5);

        }

        .content2{
            padding: 10px 20px;
            text-align: center;
            transform: translateY(-400px);
            opacity: 0;
            transition: 0.3s;
        }

        .card2:hover >.content2{
            
            opacity: 1;
            transform: translateY(-300px);
        }





        .card3{
            position: relative;
            width: 300px;
            height: 200px;
            border-radius: 20px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.5);
            transition: 0.3s;
            padding: 30px 50px;
            background: #fff;
            cursor: pointer;

            
        }
        .card3:hover{
            height: 400px;
        }

        .imgbox3{
            position: relative;
            width: 100%;
            height: 100%;
            transform:translateY(-90px);
            z-index: 99;
           

        }

        img{
            width: 100%;
            border-radius: 15px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.5);

        }

        .content3{
            padding: 10px 20px;
            text-align: center;
            transform: translateY(-400px);
            opacity: 0;
            transition: 0.3s;
        }

        .card3:hover >.content3{
            
            opacity: 1;
            transform: translateY(-275px);
        }
    </style>


</head>
<body>
    <div class="card">
        <div class="imgbox">
           <a href="{{route('busorder.create')}}"> <img src="{{asset('images/bus.jpg')}}" alt="Bus"></a>
        </div>
        <div class="content">
            <h2>Booking Bus </h2>
            <p>Per 281.3 kilometers which takes 5-7 hours to reach destination. To ensure a safe start to this journey, tickets offers two preimum bus services for this route. Bus ticket price ranges from 650 to 1400 BDT depending on preferred bus operator. Bus tickets can be booked at any time. For Booking Your Ticket Please Click here. </p>
        </div>

    </div>


    <div class="card2">
        <div class="imgbox2">
           <a href="{{route('airorder.create')}}"> <img src="{{asset('images/airplan.png')}}" alt="Air"></a>
        </div>
        <div class="content2">
            <h2> Booking Flight</h2>
            <p>Per 281.3 kilometers which takes just 30 min to reach destination. To ensure a safe start to this journey, tickets offers two preimum Air services for this route. Air ticket price ranges from 5000 to 25000 BDT depending on preferred Air operator. Air tickets can be booked at any time. For Booking Your Ticket Please Click here. </p>
        </div>

    </div>


    <div class="card3">
        <div class="imgbox3">
           <a href="{{route('movieorder.create')}}"> <img src="{{asset('images/server.png')}}" alt="Movie"></a>
        </div>
        <div class="content3">
            <h2>Booking Movie</h2>
            <p>You can Enjoy Running Movie of all cineplex and cenema hall and theater. To ensure a safe start to this enjoy, tickets offers two preimum services for this route. Movie ticket price ranges from 200 to 700 BDT depending on preferred Movie operator and Abailabe seat. Moveie tickets can be booked at any time. For Booking Your Ticket Please Click here.  </p>
        </div>
    </div>
    </body>
</html>