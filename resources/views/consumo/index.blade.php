<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Consumo Datos</title>
</head>

<style>
    body{
        background: url('https://www.doctorauto.com.mx/wp-content/uploads/2016/05/22714389533_74272ebdc3_b-1024x675.jpg');
        background-size: cover;
        background-repeat:no-repeat;

        text-align: center;
        padding: 10%;
        color: aliceblue;
    }
    div{
        text-align: center;
    }
    h1{
        color: aliceblue;
        padding: 80px 250px 0 205px;
    }
    section{
        padding: 80px;
    }
    td, th, .co{
        color: white; 
    }
</style>
<body>
<div class="row">
    
        <h1>Ingresa el Id del usuario que deseas obtener sus datos</h1>
 
        <div class="row di justify-content-center" style=" width: 332px;     margin: 0 15px 0 32%;">
             <form class="d-flex">
                <input name="buscarpor" class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary btn-lg" type="submit">Search</button>
            </form>
        </div>
       
    </div>

<div class="app">
    <section >
     
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                </tr>
            </thead>
            <tbody id="data">
            </tbody>
        </table>
    </section>
    </div>



    
    <script>
        
      let url = 'https://jsonplaceholder.typicode.com/users/';
        fetch(url)
            .then( response => response.json() )
            .then( data => mostrarData(data) )
            .catch( error => console.log(error) )

        const mostrarData = (data) => {
            console.log(data)
            
            let body = ""
            for (var i = 1; i < data.length; i++) {      
               body+=`<tr><td>${data[i].name}</td><td>${data[i].email}</td><td>${data[i].phone}</td></tr>`
            }
            document.getElementById('data').innerHTML = body
            //console.log(body)
        }
    </script>
</body>

</html>