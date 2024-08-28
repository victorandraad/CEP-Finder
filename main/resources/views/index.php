<div class="main_container">
    <h1>CEP Finder</h1>
    <!-- Postal code form -->
    <form action="">
        <input type="text" placeholder="01001000"/>
        <button type="submit">Search</button>
    </form>

    <!-- Errors information -->
    <div class="errors_info">
        <p></p>
    </div>

    <!-- Address information -->

    <div class="address_info">
        <p>CEP: <span></span></p>
        <p>Logradouro: <span></span></p>
        <p>Complemento: <span></span></p>
        <p>Bairro: <span></span></p>
        <p>Localidade: <span></span></p>
        <p>UF: <span></span></p>
    </div>

</div>


<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        align-self: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .main_container{
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 10px;

        width: 100%;
        max-width: 500px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input{
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button{
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f1f1f1;
        cursor: pointer;
    }

</style>
