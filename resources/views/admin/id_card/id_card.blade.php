

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee ID Card</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            /* background: #f0f0f0; */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-table {
            width: 100%;
            /* page-break-inside: avoid; */
            /* width: min(90vw, 400px);
            /* background: white; */
            border-collapse: collapse;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); */
        }

        .top-design {
            height: 443px;
            background-repeat: no-repeat;
            position: relative;
            background-size: cover;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .logo-cell {
            padding: 20px;
            text-align: center;
        }

        .logo-table {
            margin: 0 auto;
            border-collapse: collapse;
        }

        .logo-table td {
            padding: 5px;
            vertical-align: middle;
        }

        .logo {
            width: 40px;
            height: 40px;
        }

        .company-name {
            color: black;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.2;
            text-align: left;
        }

        .photo-cell {
            height: 300px;
            position: relative;
        }

        .photo {
            width: 170px;
            height: 170px;
            border-radius: 50%;
            border: 4px solid white;
            position: absolute;
            left: 50%;
            top: 85%;
            transform: translate(-50%, -50%);
            background: #FB8C00;
            overflow: hidden;
        }

        .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .details-cell {
            padding: 20px 30px;
            text-align: center;
        }

        .name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .role {
            background: #FB8C00;
            color: white;
            padding: 5px 20px;
            border-radius: 20px;
            display: inline-block;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .info-table {
            width: 100%;
            margin-bottom: 25px;
            border-collapse: collapse;
        }

        .info-table td {
            padding: 6px 0;
            font-size: 14px;
            text-align: left;
        }

        .info-label {
            color: #666;
            width: 120px;
        }

        .barcode {
            height: 60px;
            background: #f0f0f0;
            text-align: center;
            padding: 10px 0;
        }

        @media (max-width: 400px) {
            .card-table {
                width: 100%;
            }

            .details-cell {
                padding: 60px 20px 20px;
            }
        }
    </style>
</head>

<body>
    <table class="card-table">
        <tr>
            <td class="top-design" style="background-image: url('data:image/png;base64,{{ base64_encode(file_get_contents(public_path('uploads/id-card/bgimg.png'))) }}');">
                <table width="100%">
                    <tr>
                        <td class="logo-cell">
                            <table class="logo-table">
                                <tr>
                                    <td>
                                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('uploads/id-card/logo.png'))) }}" alt="Logo" class="logo">

                                    </td>
                                    <td>
                                        <div class="company-name">
                                            KT Wing
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="photo-cell">
                            <div class="photo">

                            @if($type == 'team')
                                <img src="data:image/{{ $imageType}};base64,{{ base64_encode(file_get_contents(public_path('uploads/volunteer/' . $imageUrl))) }}"
                                alt="Employee Photo" class="image img-thumbnail" height="100px" width="100px"
                                  />
                            @else
                                <img src="data:image/{{ $imageType}};base64,{{ base64_encode(file_get_contents(public_path('uploads/users/' . $imageUrl))) }}"
                                alt="Employee Photo" class="image img-thumbnail" height="100px" width="100px"
                                 />
                            @endif
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="details-cell">
                <div class="name">{{ $volunteer->name }}</div>
                <div class="role">{{ $volunteer->designation ?? '' }}</div>
                <table class="info-table">
                    <tr>
                        <td class="info-label">ID No</td>
                        <td>: {{ $volunteer->id }}</td>
                    </tr>
                    <tr>
                        <td class="info-label">Father's Name</td>
                        <td>: {{ $volunteer->father_name ?? '' }}</td>
                    </tr>
                    <tr>
                        <td class="info-label">E-mail</td>
                        <td>: {{ $volunteer->email ?? '' }}</td>
                    </tr>
                    <tr>
                        <td class="info-label">Phone</td>
                        <td>: {{ $volunteer->phone ?? '' }}</td>
                    </tr>
                    <tr>
                        <td class="info-label">Address</td>
                        <td>: {{ $volunteer->address ?? '' }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>

{{-- {{dd(3)}} --}}
