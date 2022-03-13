<h3>fornecedor</h3>



@php



@endphp



fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
status: {{ $fornecedores[0]['status'] }}
<br>
@if($fornecedores[0]['status'] == 'S')
    fornecedor Ativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S')
    fornecedor inativo
@endunless
