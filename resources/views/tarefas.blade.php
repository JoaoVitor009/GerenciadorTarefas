<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Tarefas</h1>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Data de Criação</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tarefas as $tarefa)
                    <tr>
                        <td>{{ $tarefa->id }}</td>
                        <td>{{ $tarefa->titulo }}</td>
                        <td>{{ $tarefa->descricao }}</td>
                        <td>{{ $tarefa->data_criacao }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Nenhuma tarefa encontrada.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
