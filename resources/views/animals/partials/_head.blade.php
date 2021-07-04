<tr class="text-center">
    <td><i class="fa fa-eye"></i> Detahes</td>
    <td @click="orderBy('name', $event)">Nome</td>
    <td @click="orderBy('email', $event)">Email</td>
    <td @click="orderBy('phone', $event)">Telefone</td>
    <td @click="orderBy('creted_at', $event)">Criado em</td>
    <td></td>
</tr>