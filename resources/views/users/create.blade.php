<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foydalanuvchi Formasi</title>
</head>
<body>

    <!-- POST  -->
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Ismingiz" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Qo'shish</button>
    </form>

    <!-- PUT  -->
    <form action="{{ route('users.update', ['id' => 1]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Yangi ism" required>
        <input type="email" name="email" placeholder="Yangi email" required>
        <button type="submit">Yangilash</button>
    </form>

    <!-- PATCH  -->
    <form action="{{ route('users.patch', ['id' => 1]) }}" method="POST">
        @csrf
        @method('PATCH')
        <input type="text" name="name" placeholder="Ismni o'zgartirish">
        <button type="submit">O'zgartirish</button>
    </form>

    <!-- DELETE  -->
    <form action="{{ route('users.destroy', ['id' => 1]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">O'chirish</button>
    </form>

</body>
</html>
