@extends('layout.master')

@section('content')
    <style>
        .center {
            margin-top: 100px;
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .header-form h1 {
            font-size: 32px;
        }

        .header-mailler {
            margin-left: 100%;
        }

        .form-group label {
            font-size: 20px;
            float: left;
        }

        .form-group {
            margin-top: 25px;
        }

        .body-mailler {
            margin-top: 7%;
        }

        .tasks {
            margin-top: 15px;
        }

        td,
        th {
            border: solid 1px;
        }

        .w-100 {
            width: 100% !important;
        }

        .border-none {
            border: none;
            margin-bottom: -6px;
        }

        .border-none:focus {
            border: none;
        }

        textarea {
            resize: none;
        }

        @media only screen and (max-width: 999px) {
            .center {
                width: 100%;
            }

            .header-mailler {
                margin-left: 5%;
            }
        }

        @media only screen and (max-width: 450px) {
            .form-group {
                width: 100% !important;
            }
        }
    </style>
    <div class="row center">
        <div class="header-mailler">
            <form id="form_send_mail" name="form_send_mail">
                <div class="content">
                    <div class="header-form">
                        <h1 class="text-center">SETUP MAIL</h1>
                    </div>
                    <div class="body-mailler row">
                        <div class="form-group col-6">
                            <label for="send_user">Người Gửi :</label>
                            <input type="text" class="form-control" name="send_user" value="Tẩn Láo Lù" id="send_user"
                                placeholder="Enter you fullname...">
                        </div>
                        <div class="form-group col-6">
                            <label for="recipient_email">Người Nhận :</label>
                            <select class="form-control" name="recipient_email" id="recipient_email">
                                @foreach ($user_nhan as $item)
                                    <option value="{{ $item->email }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="position">Chức Vụ :</label>
                            <input type="text" class="form-control" name="position" value="Nhân Viên" id="position"
                                placeholder="Enter you position...">
                        </div>
                        <div class="form-group col-6">
                            <label for="department">Bộ Phận :</label>
                            <input type="text" class="form-control" name="department" value="Phòng Công Nghệ"
                                id="department" placeholder="Enter you department...">
                        </div>
                        <div class="tasks w-100">
                            <label><strong>Các công việc đã thực hiện :</strong></label>
                            <table class="w-100">
                                <tr class="w-100">
                                    <th class="p-2 col-1">STT</th>
                                    <th class="col-3">Công Việc</th>
                                    <th class="col-7">Chi tiết công việc</th>
                                    <th class="col-1"></th>
                                </tr>
                                <tr>
                                    <td class="text-center"><label><strong>1</strong></label></td>
                                    <td>
                                        <textarea id="task_form" type="text" class="w-100 border-none " cols="1"></textarea>
                                    </td>
                                    <td>
                                        <textarea id="task_detail_form" type="text" class="w-100 border-none " cols="1"></textarea>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="mt-3">
                            <label><strong>Các khó khăn gặp phải :</strong></label>
                            <textarea class="form-control" name="" id=""rows="4"></textarea>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <button class="btn btn-dark" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Xem Trước</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="body_dialog" class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Gửi</button>
                </div>
            </div>
        </div>
    </div>
    <script></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
