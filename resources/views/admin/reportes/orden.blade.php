<!doctype html>
<html>
  <head>
  
<meta name="viewport" content="width=device-width, initial-scale=1, 
shrink-to-fit=no">

</head>
  <body>
  <div style="text-align:center; padding-top:100px">
<table  border="2" style="margin: 0 auto;">
  <tr>
    <td colspan="7"></td>
    <th><span> </span></th>
    <td style="text-align:center">Nº de Orden: {{ $orden->id }}</td>
  </tr>

  
   <tr>
    <td colspan="9" style="text-align:center" ><img src="img/tambo.png" alt="" width="400" height="90">
    </td>
   </tr>


  <tr>
      <th style="background-color: #f2f2f2;"colspan="9">*REPORTE DEL PEDIDO</th>
   
  </tr>

  <tr>
    <th>Nombre del Comprador</th>
    <td colspan="4" style="text-align:center">{{ $orden->contact }}</td>
    <th>Telefono del Comprador</th>
    <td colspan="3" style="text-align:center">{{ $orden->phone }}</td>

  </tr>



  <tr>
    <th style="background-color: #f2f2f2;" colspan="9">*DATOS DEL PRODUCTO</th>
  </tr>
  
  <tr style="text-align:center" colspan="9">
   
    <th colspan="3">Nombre del producto</th>
   
    <th colspan="1">Cantidad del Producto</th>
  
    <th colspan="2">precio del producto</th>
    
    <th colspan="3">imagen del producto</th>
    
 
  </tr> 
  @foreach($items as $item) 
  <tr colspan="9">
    
    <td colspan="3" style="text-align:center">{{ $item->name }}</td>
    <td colspan="1" style="text-align:center">{{ $item->qty }}</td>
    <td colspan="2" style="text-align:center">{{ $item->price }}</td> 
    <td colspan="3" style="text-align:center"><img src="{{ $item->options->image }}" alt=""width="50" height="50"></td>
  </tr> 
    
  <tr>
  <th>Fecha de <br> Pedido</th>
   <td colspan="3" style="text-align:center">{{$orden->created_at}}</td>
   <th></th>
   <td colspan="2" style="text-align:center"><b>Total</b></td>
   <th></th>
   <td style="text-align:center"> {{ $item->price * $item->qty }} Bs.</td>
 </tr>
 @endforeach
 <tr>
  <th></th>
   <td colspan="3" style="text-align:center"></td>
   <th></th>
   <td colspan="2" style="text-align:center"><b>Total a Pagar</b></td>
   <th></th>
   <td style="text-align:center"> {{$orden->total}} Bs.</td>
 </tr>
</table>
</div>
  </body>
</html>



