<form id="contact-form" action="{{ route('contact.store') }}" method="POST">
    @csrf

    <div>
        <h1>
         Gracias por contactarnos, ingrese su información
        </h1>
    </div>

    <br>

    <div>
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="email">Correo:</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="message">Mensaje:</label>
        <textarea name="message" id="message" required></textarea>
    </div>

    <button type="submit">Submit</button>
</form>

<style>
    form {
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    label {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    input, textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    textarea {
        height: 100px;
    }

    button {
        background: #4CAF50;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

</style>
