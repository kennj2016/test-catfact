<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

        <style>
            table{}
            th {
                background-color: #4CAF50;
                color: white;
            }
            table td{padding: 10px 50px;}
            tr:nth-child(even) {background-color: #f2f2f2;}
        </style>
    </head>
    <body>

        <a href="{{url('/')}}">Back</a>
        <table>
           <thead>
           <tr>
               <th>
                   No.
               </th>
               <th>
                   name
               </th>
               <th>
                   number
               </th>
               <th>
                   Action
               </th>
           </tr>

           </thead>

            <tbody>
            @foreach ($data as $index=> $pdf)

                <tr>
                    <td>
                        {{++$index}}
                    </td>
                    <td>
                        {{$pdf->file_name }}
                    </td>
                    <td>
                        {{$pdf->number }}
                    </td>
                    <td>
                        <a href="{{url('pdf/'.$pdf->file_name) }}" download="">Download</a>
                    </td>
                </tr>
            @endforeach
            </tbody>


        </table>

    </body>
</html>
