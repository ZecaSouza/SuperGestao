<h3>fornecedor</h3>



@php



@endphp


@isset($fornecedores)
    fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
            @empty($fornecedores[0]['cnpj'])
                -vazio 
            @endempty
    @endisset
@endisset
