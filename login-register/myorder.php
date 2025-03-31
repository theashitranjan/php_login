<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            border: 0px;
            padding: 0px;
            box-sizing: border-box;


        }
        body{
            background: linear-gradient(90deg, pink,wheat);
        }
        .containner{
            max-width: 600px;
            margin: 0px auto;

        }
        .apply-box{
            max-width: 600px;
            padding: 20px;
            margin: 0px;
            margin-top: 50px;
            border: solid rgba(225,225,225,0.3);
            background: rgba(225,225,225,0.2);
            box-shadow: 0px 4px 30px
            rgba(0,0,0,0.1);
            border-radius: 40px;

        }
        .form-containner{
            margin-top: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit,
            minmax(200px,1fr));
            gap: 20px;
        }
        .form-control{
            display: flex;
            flex-direction: column;
            

        }
        label{
            font-size: 15px;
            margin-bottom: 5px;
            
        }
        input,select,textarea{
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 15px;

        }
        input:focus{
            outline-color: royalblue;
        }

        .button-containner{
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }
        button{
            background-color: royalblue;
            border: transparent solid 2px;
            color: white;
            border-radius: 8px;
        }
        button:hover{
            background-color: red;
            border: 2px solid royalblue;
            transition: 0.3s ease-out;
            cursor: pointer;
        }
        .textarea-control{
            grid-column: 1/ span 2;

        }
        .textarea-control textarea{
            width: 100%;
        }
        @media(max-width:460px){
            .textarea-control{
                grid-column: 1/ span 1;

            }
        }
        .form-control2{
            margin-top: 20px;
            display: grid;
        }
        .sbmt{
            color: green;
        }



    </style>



</head>
<body>
    <div class="containner">

        <div class="apply-box">

            <h1>personal information<span class="title">(orders preview)</span></h1>

            <form action="connection.php" method="post">

                <div class="form-containner">

                    <div class="form-control">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first-name" placeholder="Enter first name">
                    </div>

                    <div class="form-control">
                        <label for="last-name">last Name</label>
                        <input type="text" id="last-name" name="last-name" placeholder="Enter last name">
                    </div>

                    <div class="form-control">
                        <label for="first-name">email</label>
                        <input type="enter mail" id="first-name" name="Eemail" placeholder="Enter first name">
                    </div>

                    <div class="form-control">
                        <label for="job-role">Mobile number</label>
                        <input type="number" name="mobile-number" placeholder="Enter mobile number">
                    </div>

                    <div class="textarea">
                        <label for="adress">Adress</label>
                        <textarea name="adress" id="" cols="30" rows="10" placeholder="Enter full adress"></textarea>
                    </div>

                    <div class="form-control">
                        <label for="city">City</label>
                        <input type="text" id="first-name" name="city" placeholder="city">
                    </div>

                    <div class="form-control">
                        <label for="pincode">pincode</label>
                        <input type="number" id="first-name" name="pincode" placeholder="pincode">
                    </div>

                    <div class="form-control">
                        <label for="date">date</label>
                        <input type="date" id="first-name" name="date" 
                        value="30-05-2024">
                    </div>

                    <h1>book your truck <span class="title">(Bharat logistics)</span></h1>
                </div>





                <div class="form-control2">
                    <label for="first-name">form</label>
                    <input type="text" id="first-name" name="location" placeholder="------From------">
                </div>

                <div class="form-control2">
                    <label for="first-name">To</label>
                    <input type="text" id="first-name" name="to" placeholder="------To------">
                </div>

                <div class="form-control2">
                    <label for="job-role">vehicle type</label>
                    <select   name="vehicle-type" id="job-role">
                        <option value="vehicle type">vehicle type</option>
                        <option value="open truck">open truck</option>
                        <option value="containner">containner</option>
                        <option value="small pickup(bolero, van pickup etc)">small pickup(bolero, van pickup etc)</option>
                    </select>
                </div>

                <div class="form-control2">
                    <label for="first-name">material weight</label>
                    <input type="number" id="first-name" name="material-weight" placeholder="material weight in tone">
                </div>

                <div class="form-control2">
                    <label for="first-name">truck length</label>
                    <input type="number" id="first-name" name="truck-length" placeholder="truck length">
                </div>

                <div class="form-control2">
                    <label for="job-role">Businness cateogry</label>
                    <select name="job-role"  id="job-role">
                        <option value="Businness cateogry">Businness cateogry</option>
                        <option value="manufactural">manufactural</option>
                        <option value="transporter">transporter</option>
                        <option value="truck owner">truck owner</option>
                        <option value="individual">individual</option>
                        <option value="others">others</option>
                    </select>
                </div>

                <div class="button-containner">
                    <button type="submit">submit order</button>

                </div>
                
            </form>
        </div>
    </div>
</body>
</html>