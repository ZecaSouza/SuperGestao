<h3>fornecedor</h3>



@php



@endphp


@isset($fornecedores)
    fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    status: {{ $fornecedores[0]['status'] }}
    <br>
    Cpnj: {{ $fornecedores[0]['cnpj'] ?? 'Valor não preenchido' }}
@endisset
