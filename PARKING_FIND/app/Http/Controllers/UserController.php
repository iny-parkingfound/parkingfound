<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // 회원가입 처리
    public function register(Request $request) {
        // 유효성 검사
        $request->validate([
            'account' => ['required', 'min:4', 'max:20', 'regex:/^[a-zA-Z0-9]+$/']
            ,'password' => ['required', 'min:2', 'max:20', 'regex:/^[a-zA-Z0-9]+$/']
            ,'password_chk' => ['same:password']
            ,'name' => ['required', 'regex:/^[가-힣]{2,30}$/u']
            ,'phonenum' => ['required', 'regex:/^010[0-9]{4}[0-9]{4}$/']
            ,'car' => ['required', 'regex:/^[a-zA-Z0-9가-힣]{2,50}$/u']
            ,'carnum' => ['required', 'regex:/^[0-9가-힣]{2,50}$/u']
        ]);

        // 회원 정보 가공
        $insertData = $request->only('account', 'password', 'name', 'phonenum', 'car', 'carnum');
        $insertData['password'] = Hash::make($insertData['password']);

        // 인서트 처리
        User::create($insertData);

        // return view('get.login') 할 경우 url은 regist고 화면만 login페이지로 넘어감
        return redirect()->route('login');
    }

    // 아이디 중복 확인
    public function accountChk(Request $request) {
        try {
            // 응답 데이터 초기화
            $responseData = [
                'errorFlg' => true
                ,'accountFlg' => true
                ,'erroMsg' => ''
            ];

            // 유효성 검사
            $validation = Validator::make(
                $request->only('account')
                ,[
                    'account' => ['required', 'min:4', 'max:20', 'regex:/^[a-zA-Z0-9]+$/']
                ]
            );
            
            if($validation->fails()) {
                throw new Exception('유효성 체크 에러');
            }

            // 아이디 체크
            $resultAccount = User::select('id')
                                ->where('account', $request->account)
                                ->first();
            if(!is_null($resultAccount)) {
                $responseData['accountFlg'] = true;
                throw new Exception('아이디 중복');
            }

            // 정상 처리(사용가능 이메일)
            $responseData['errorFlg'] = false;
            $responseData['accountFlg'] = false;

        } catch (\Throwable $th) {
            $responseData['errorFlg'] = true;
            $responseData['errorMsg'] = $th->getMessage();
            
        } finally {
            return response()->json($responseData);
        }
    }
}
