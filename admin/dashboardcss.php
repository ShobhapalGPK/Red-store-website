<style>
        .container-fluid {
            height: 750px;
            width: 100%;
            display: flex;
        }

        .sidebar {
            height: 1100px;
            width: 20%;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(0, 0, 0, 0.15) 100%), radial-gradient(at top center, rgba(255, 255, 255, 0.40) 0%, rgba(0, 0, 0, 0.40) 120%) #989898;
            background-blend-mode: multiply, multiply;
        }
        .left-bar{
            height: 100vh;
            width: 80%;
            /* background-color: yellow; */

        }

        .main {
            height: 10vh;
            width: 100%;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(0, 0, 0, 0.15) 100%), radial-gradient(at top center, rgba(255, 255, 255, 0.40) 0%, rgba(0, 0, 0, 0.40) 120%) #989898;
            background-blend-mode: multiply, multiply;

        }

        .red{
            margin-left: 20px;
            color: white;
        }

        .side-content{
           display: flex;
           flex-direction: row;
           margin-left: 30px;
        }
        .side-content  h3 a{
            display: flex;
            gap: 10px;
            color: black;
            text-decoration: none;
        }
        .side-content  h3 a:hover{
            color: white;
        }


        .main-content{
            float: right;
            margin-right: 10px;
            
           
        }

        .main-content h3 a{
            display: flex;
            gap: 10px;
            color: black;
            text-decoration: none;
        }
        

        .main-content h3:hover a{
            color: white;
        }
        .box{
           display: flex;
           flex-wrap: wrap;
        }
        .box1{
           
            height: 150px;
            width: 300px;
            background-color: #989898;
            margin-top: 20px;
            margin-left: 25px;
            background-image: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%);
            display: flex;
        }

        .box1 h2{
            padding-left: 30px;
            color:brown;
        }

        .box1 a{
            text-decoration: none;
        }
       

        .table{
            margin-left: 15px;
            margin-right: 15px;
        }



        /*************profile css ***************************** */

        .container {
      max-width: 800px;
      margin: auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
      color: #333;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    .form-group input, .form-group textarea, .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .form-group textarea {
      resize: vertical;
    }
    .form-group button {
      padding: 10px 15px;
      background-color: #28a745;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .form-group button:hover {
      background-color: #218838;
    }
    
    .privacy {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }
    .privacy input {
      margin-right: 10px;
    }
    .multistep-buttons {
      display: flex;
      justify-content: space-between;
    }
  




    </style>