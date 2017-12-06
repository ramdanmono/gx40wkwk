
 ██████╗ ██╗  ██╗██╗  ██╗ ██████╗     ███████╗███████╗███╗   ██╗██████╗ ███████╗██████╗     ██╗
██╔════╝ ╚██╗██╔╝██║  ██║██╔═████╗    ██╔════╝██╔════╝████╗  ██║██╔══██╗██╔════╝██╔══██╗    ██║
██║  ███╗ ╚███╔╝ ███████║██║██╔██║    ███████╗█████╗  ██╔██╗ ██║██║  ██║█████╗  ██████╔╝    ██║
██║   ██║ ██╔██╗ ╚════██║████╔╝██║    ╚════██║██╔══╝  ██║╚██╗██║██║  ██║██╔══╝  ██╔══██╗    ╚═╝
╚██████╔╝██╔╝ ██╗     ██║╚██████╔╝    ███████║███████╗██║ ╚████║██████╔╝███████╗██║  ██║    ██╗


                                 ╔═╗╦ ╦╔═╗╦╔═╦╔╗╔╔═╗╔═╗╔═╗╔╦╗╔═╗  
                              ───╠╣ ║ ║║  ╠╩╗║║║║║ ╦║  ║ ║ ║║║╣───
                                 ╚  ╚═╝╚═╝╩ ╩╩╝╚╝╚═╝╚═╝╚═╝═╩╝╚═╝  

Adapun pencuri, maka wajib untuk dipotong  tangan kanannya berdasarkan Al-Kitab (Al-Qur’an), As-Sunnah, dan ijma’. Allah ta’ala telah berfirman :
“Laki-laki yang mencuri dan perempuan yang mencuri, potonglah tangan keduanya (sebagai) pembalasan bagi apa yang mereka kerjakan dan sebagai siksaan dari Allah. Dan Allah Maha Perkasa lagi Maha Bijaksana. Maka barang siapa bertobat (di antara pencuri-pencuri itu) sesudah melakukan kejahatan itu dan memperbaiki diri, maka sesungguhnya Allah menerima tobatnya. Sesungguhnya Allah Maha Pengampun lagi Maha Penyayang” [QS. Al-Maaidah : 38-39].
=============================================================

Petunjuk penggunaan:

/*	Pengaturan SMTP		*/

	$smtpserver = "";	//	Isi dengan server smtp yang kamu gunakan
	$smtpuser = "";		//	Isi dengan user smtp yang kamu gunakan
	$smtppass = "";		//	Isi dengan password smtp yang kamu gunakan
	$smtpport = "";		//	isi dengan port smtp yang kamu gunakan
	$priority = ;		//	Isi 1 untuk high priority, isi 0 untuk normal priority

/*	End		*/

/*	Pengaturan mail		*/

	$mailist = "";		//	Isi dengan nama mailist file kamu.
	$fromname = "";		//	Isi fromname sesuai dengan keinginan kamu. Jika kamu menggunakan fitur $userandom, kamu tidak perlu mengisi bagian ini.
	$frommail = "";		//	Isi frommail sesuai dengan keinginan kamu. Jika kamu menggunakan fitur $userandom, kamu tidak perlu mengisi bagian ini.
	$subject = "";		//	Isi frommail sesuai dengan keinginan kamu. Jika kamu menggunakan fitur $userandom, kamu tidak perlu mengisi bagian ini.
	$msgfile = "";		//	Isi dengan nama file letter kamu. Format letter disarankan .html

/*	End		*/	
	

/*	Other		*/

	$userandom = ;		//	Isi 1 untuk menggunakan. 0 untuk tidak. Ini berfungsi untuk mengaktifkan fitur random fromname, frommail, dan subject.
	$sleeptime = 3;		//	Waktu/durasi jeda pengiriman tiap email dalam detik. default 3
	$replacement = 1;	//	Isi 1 untuk menggunakan. 0 untuk tidak. Ini berfungsi untuk me replace letter kamu dengan format yang sudah ditentukan.
	$randurl = array();	//	Ini adalah fitur random url. Berfungsi untuk mengacak url dengan url sudah kamu tentukan. Cara pengisiannya adalah sbb: $randurl = array("http://urlkamu1.com","http://urlkamu2.com","dst");
	$userremoveline = 0;	//	Isi 1 untuk menggunakan. 0 untuk tidak. Jika fitur ini diaktifkan, email-list yang sudah dikirimkan pesan akan dihapus dari mailist kamu.

/*	End		*/

Format letter:
     		##email## : replace the contents of the letter to show the recipient's email
     		##subject## : Using random subject
     		##frommail## : Using random From mail
     		##fromname## : Using random From name
     		##short## : Using random your URL 
     		##country## : Using random country around the world
     		##date## : Using date time. (NOT RANDOM)
			##country## : Using random country around the world
     		##date## : Using date time. (NOT RANDOM)
    		##OS## : Using random Operating Systems
    		##browser## : Using random Browsers
Rondom Email : ##randstring##.##randstring##@##randstring##.apple.com <--- Change Domain Address
    		