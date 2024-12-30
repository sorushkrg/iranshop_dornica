<?php
final class KSc_Ftp {
    
    var $server,
        $username,
        $userpass,
        $ftp_conn;

    final public function __construct(){
      }
    //=============================================
    public function KSf_Connect($server, $user, $pass) {
        $this->server   = $server;
        $this->username = $user;
        $this->userpass = $pass;
        $this->ftp_conn = ftp_connect($this->server) or die("Could not connect to $this->server");
        ftp_login($this->ftp_conn, $this->username, $this->userpass);
        ftp_pasv($this->ftp_conn, true);
    }

    private function KSf_Check_Path($type,$path){
        self::KSf_Connect($this->server, $this->username, $this->userpass);
        $ret = 0;
        switch ($type){
            case"is_dir":
                $ret= is_dir("ftp://".$this->username.":".$this->userpass."@".$this->server."/".$path);
                break;
            case"!is_dir":
                $ret=  !is_dir("ftp://".$this->username.":".$this->userpass."@".$this->server."/".$path);
                break;
            case"is_file":
                $ret=  is_file("ftp://".$this->username.":".$this->userpass."@".$this->server."/".$path);
                break;
            case"!is_file":
                $ret=  !is_file("ftp://".$this->username.":".$this->userpass."@".$this->server."/".$path);
                break;
            case"file_exists":
                $ret=  file_exists("ftp://".$this->username.":".$this->userpass."@".$this->server."/".$path);
                break;
            case"!file_exists":
                $ret=  !file_exists("ftp://".$this->username.":".$this->userpass."@".$this->server."/".$path);
                break;
        }
        return $ret;
    }
    //=================================================================
    public function KSf_Dir_Create($path){
        if(self::KSf_Check_Path("!is_dir",$path)){
            ftp_mkdir( $this->ftp_conn,$path);
            self::KSf_Disconnect();
        }else{
            return "ExistFolder";
        }

    }
    private function KSf_mkdir_recusive($ftpath){
        $parts = array_filter(explode('/',$ftpath)); 
        ftp_chdir($this->ftp_conn, "" );
        foreach($parts as $part){
           if(!@ftp_chdir($this->ftp_conn, $part)){
            ftp_mkdir($this->ftp_conn, $part);
            ftp_chdir($this->ftp_conn, $part);
         }
          
        }
     }
    //=================================================================
    public function KSf_Upload($RemotePath,$RemoteFile,$LocalPath){
        $i=0;
        loop:
        if(self::KSf_Check_Path("is_dir",$RemotePath)){
            $ftp_put = ftp_put( $this->ftp_conn,$RemotePath."/".$RemoteFile, $LocalPath, FTP_BINARY);
            self::KSf_Disconnect();
            return $ftp_put;
        }else{
            if($i==0){
                self::KSf_mkdir_recusive($RemotePath);
                $i=1;
                goto loop;
            }
        }
    }
    //=================================================================
    public function KSf_Content_Upload_Tmp($RemotePath,$RemoteFile,$Content){
        $i=0;
        loop:
        if(self::KSf_Check_Path("is_dir",$RemotePath)){
            ftp_fput( $this->ftp_conn,$RemotePath."/".$RemoteFile, $Content, FTP_BINARY);
            self::KSf_Disconnect();
            return 1;
        }else{
            if($i==0){
                self::KSf_mkdir_recusive($RemotePath);
                $i=1;
                goto loop;
            }
        }
    }
    //=================================================================
    public function KSf_Dir_Del($path){
        if(self::KSf_Check_Path("is_file",$path)){
            ftp_delete( $this->ftp_conn,$path);
            self::KSf_Disconnect();
        }else{
            return "NotExistFolder";
        }

    }

    //=================================================================
    public function KSf_Content_Upload($RemotePath,$RemoteFile,$Data){
        $TmpPath= "../../tmp/";
		if(!is_dir($TmpPath))
			mkdir($TmpPath);
        $TmpName= substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 30)."_".$RemoteFile;
        $TempFull=$TmpPath.$TmpName;
        file_put_contents($TempFull, $Data);
        $my=fopen($TempFull, 'r');
        self::KSf_Content_Upload_Tmp($RemotePath,$RemoteFile,$my);
        fclose($my);
        unlink($TempFull);
        return 1;
    }

//    public function KSf_List(){
//        self::KSf_Connect();
//        echo !is_dir("ftp://".$this->username.":".$this->userpass."@".$this->server."/public_html");
//        $file_list = ftp_nlist($this->ftp_conn, "httpdocs/");
//        //print_r($file_list);
//        self::KSf_Disconnect();
//    }


    public function KSf_Disconnect(){
        ftp_close($this->ftp_conn);
    }

};