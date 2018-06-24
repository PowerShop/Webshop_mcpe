<?php
	require_once 'Curl.php';
	class TrueWallet{
		private $login_url = "https://wallet.truemoney.com/user/login";
		private $logout_url = "https://wallet.truemoney.com/user/logout";
		private $profile_url = "https://wallet.truemoney.com/api/profile";
		private $history_url = "https://wallet.truemoney.com/api/transaction_history";
		private $report_url  = "https://wallet.truemoney.com/api/transaction_history_detail?reportID=";
		private $curl;
		function __construct(){
			$this->curl = new Curl();
		}
		
		public function login($email, $password){
			$email = str_replace('@', '%40', $email);
			$data = "email=".$email."&password=".$password;
			$login  = $this->curl->login($this->login_url, $data);
			return $login;
		}
		
		public function logout(){
			$logout = $this->curl->grab_page($this->logout_url);
			return $logout;
		}
	
		public function get_profile(){
			if($profile = $this->curl->grab_page($this->profile_url)){
    			$profile_obj  = json_decode($profile);
				return $profile_obj;
			}else{
				return $profile;
			}
		}
		
		public function get_transactions(){
			if($trans = $this->curl->grab_page($this->history_url)){
				$trans_obj  = json_decode($trans);
				$trans_data = $trans_obj->data->activities;
				return $trans_data;
			}else{
				return $trans;
			}
		}

		public function get_report($report_id){
			if($report = $this->curl->grab_page($this->report_url.$report_id)){
				$report_obj = json_decode($report);
				$report_data = $report_obj->data;
				return $report_data;
			}else{
				return $report;
			}
		}
	}
?>
