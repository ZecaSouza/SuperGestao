<h3>fornecedor</h3>



@php



@endphp


@isset($fornecedores)

    @for($i = 0; isset($fornecedores[$i]); $i++)
        fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        status: {{ $fornecedores[$i]['status'] }}
        <br>
        Cpnj: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
    @endfor
@endisset
