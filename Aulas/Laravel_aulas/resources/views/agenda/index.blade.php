<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Index</title>
    <script type="text/javascript">
        function confirmDelete(id) {
            if (confirm("Deseja realmente excluir?")) {
                fetch('agenda/' + id, {
                    method: 'DELETE'
                }).then(location.reload())
            }
        }
    </script>
</head>
<body>
    <fieldset>
        <legend>Agenda</legend>
        <a href="{{ route('agenda.create') }}"><button>Novo Contato</button></a>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agenda as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['nome'] }}</td>
                        <td>{{ $item['telefone'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td><a href="{{ route('agenda.show', $item['id']) }}"><button>Ver</button></a></td>
                        <td><a href="{{ route('agenda.edit', $item['id']) }}"><button>Editar</button></a></td>
                        <td><form action="/agenda/{{ $item['id'] }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este registro?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </fieldset>
</body>
</html>