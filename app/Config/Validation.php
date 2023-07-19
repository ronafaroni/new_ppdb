<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	// Validations Siswa
	public $registrasi = [
		'username' 				=> 'required|is_unique[tb_users.username]',
		'password' 				=> 'required|is_unique[tb_users.password]|min_length[6]',
		'nama_users' 			=> 'required',
		'tgl_lahir' 			=> 'required',
	];

	public $registrasi_errors = [
		'username' 				=> [
			'required' 			=> 'NISN / NPSN wajib diisi dan tidak boleh kosong.',
			'is_unique' 		=> 'NISN / NPSN sudah terdaftar.',
		],

		'password' 		=> [
			'required' 			=> 'Password wajib diisi dan tidak boleh kosong.',
			'is_unique' 		=> 'Password sudah pernah ada.',
			'min_length'		=> 'Password minimal 6 karakter.',
		],

		'tgl_lahir' 		=> [
			'required' 			=> 'Tanggal Lahir wajib diisi dan tidak boleh kosong.',
		],

		'nama_users' 		=> [
			'required' 			=> 'Nama wajib diisi dan tidak boleh kosong.',
		],
	];

	public $login = [
		'username' 				=> 'required',
		'password' 				=> 'required',
	];

	public $login_errors = [
		'username' 				=> [
			'required' 			=> 'Nomor Handphone wajib diisi dan tidak boleh kosong.',
		],

		'password' 		=> [
			'required' 			=> 'Password wajib diisi dan tidak boleh kosong.',
		],
	];

	public $reset = [
		'password' 				=> 'is_unique[tb_users.password]|min_length[6]',
	];

	public $reset_errors = [
		'password' 		=> [
			'is_unique' 		=> 'Password sudah pernah ada.',
			'min_length'		=> 'Password minimal 6 karakter.',
		],
	];

	public $konfirmasi = [
		'status_pengajuan' 			=> 'required',
	];

	public $konfirmasi_errors = [
		'status_pengajuan' 		=> [
			'required' 			=> 'Konfirmasi wajib diisi dan tidak boleh kosong.',
		],
	];

	public $pendaftaran = [
		'no_id' 			=> 'is_unique[tb_pendaftaran.no_id]',
		// 'nama_lengkap' 		=> 'required',
		'jns_kelamin' 		=> 'required',

		'tempat_lahir' 		=> 'required',
		'tgl_lahir' 		=> 'required',
		'nama_ayah' 		=> 'required',
		'nama_ibu' 		    => 'required',
		'no_telp' 		    => 'required',
		'alamat' 			=> 'required',

		'asal_tk' 			=> 'required',
		'alamat_tk' 		=> 'required',
	];

	public $pendaftaran_errors = [

		'no_id' 			=> [
			'is_unique' 	=> 'Data yang anda masukan sudah terdaftar, mohon cek data anda kembali.',
		],

		'jns_kelamin' 	=> [
			'required' 		=> 'Jenis kelamin wajib diisi dan tidak boleh kosong.',
		],

		'tempat_lahir' 		=> [
			'required' 		=> 'Tempat Lahir wajib diisi dan tidak boleh kosong.',
		],

		'tgl_lahir' 		=> [
			'required' 		=> 'Tanggal Lahir wajib diisi dan tidak boleh kosong.',

		],

		'nama_ayah' 		=> [
			'required' 		=> 'Nama Ayah wajib diisi dan tidak boleh kosong.',

		],

		'nama_ibu' 		=> [
			'required' 		=> 'Nama Ibu wajib diisi dan tidak boleh kosong.',

		],

		'no_telp' 		=> [
			'required' 		=> 'No. Telp wajib diisi dan tidak boleh kosong.',

		],

		'alamat' 			=>
		[
			'required' 		=> 'Alamat wajib diisi dan tidak boleh kosong.',
		],

		'asal_tk' 			=>
		[
			'required' 		=> 'Asal TK / RA wajib diisi dan tidak boleh kosong.',
		],

		'alamat_tk' 		=>
		[
			'required' 		=> 'Alamat TK / RA wajib diisi dan tidak boleh kosong.',
		],

	];

	public $orangtua = [
		'no_nisn' 			=> 'is_unique[tb_orangtua.no_nisn]',
		'nama_ayah' 		=> 'required',
		'nik_ayah' 			=> 'required',
		'tempat_lahir_ayah' => 'required',
		'tgl_lahir_ayah' => 'required',
		'pendidikan_ayah' 	=> 'required',
		'pekerjaan_ayah' 	=> 'required',
		'penghasilan_ayah' 	=> 'required',
		'no_hp_ayah' 		=> 'required',
		'email_ayah' 		=> 'required|valid_email',

		'nama_ibu' 			=> 'required',
		'nik_ibu' 			=> 'required',
		'tempat_lahir_ibu' 	=> 'required',
		'tgl_lahir_ibu' 	=> 'required',
		'pendidikan_ibu' 	=> 'required',
		'pekerjaan_ibu' 	=> 'required',
		'penghasilan_ibu' 	=> 'required',
		'no_hp_ibu' 		=> 'required',
		'email_ibu' 		=> 'required|valid_email',

		'nama_wali' 		=> 'required',
		'nik_wali' 			=> 'required',
		'tempat_lahir_wali' => 'required',
		'tgl_lahir_wali'	=> 'required',
		'pendidikan_wali' 	=> 'required',
		'pekerjaan_wali' 	=> 'required',
		'penghasilan_wali' 	=> 'required',
		'no_hp_wali' 		=> 'required',
		'email_wali' 		=> 'required|valid_email',
	];

	public $orangtua_errors = [

		'no_nisn' 			=> [
			'is_unique' 	=> 'Data yang anda masukan sudah terdaftar, mohon cek data anda kembali.',
		],

		'nama_ayah' 		=> [
			'required' 		=> 'Nama ayah wajib diisi dan tidak boleh kosong.',
		],

		'nik_ayah' 			=> [
			'required' 		=> 'NIK ayah wajib diisi dan tidak boleh kosong.',
		],

		'tempat_lahir_ayah' => [
			'required' 		=> 'Tempat lahir ayah wajib diisi dan tidak boleh kosong.',
		],

		'tgl_lahir_ayah' 	=> [
			'required' 		=> 'Tanggal lahir ayah wajib diisi dan tidak boleh kosong.',
		],

		'pendidikan_ayah' 	=> [
			'required' 		=> 'Pendidikan ayah wajib diisi dan tidak boleh kosong.',
		],

		'pekerjaan_ayah' 	=> [
			'required' 		=> 'Pekerjaan ayah wajib diisi dan tidak boleh kosong.',
		],

		'penghasilan_ayah' 	=> [
			'required' 		=> 'penghasilan ayah wajib diisi dan tidak boleh kosong.',
		],

		'no_hp_ayah' 		=> [
			'required' 		=> 'No. Handphone ayah wajib diisi dan tidak boleh kosong.',
		],

		'email_ayah' 		=>
		[
			'required' 		=> 'Email ayah wajib diisi dan tidak boleh kosong.',
			'valid_email'	=> 'Email ayah kurang valid, silahkan ulangi dengan email yang benar',
		],


		'nama_ibu' 		=> [
			'required' 		=> 'Nama ibu wajib diisi dan tidak boleh kosong.',
		],

		'nik_ibu' 			=> [
			'required' 		=> 'NIK ibu wajib diisi dan tidak boleh kosong.',
		],

		'tempat_lahir_ibu' => [
			'required' 		=> 'Tempat ibu ayah wajib diisi dan tidak boleh kosong.',
		],

		'tgl_lahir_ibu' 	=> [
			'required' 		=> 'Tanggal ibu ayah wajib diisi dan tidak boleh kosong.',
		],

		'pendidikan_ibu' 	=> [
			'required' 		=> 'Pendidikan ibu wajib diisi dan tidak boleh kosong.',
		],

		'pekerjaan_ibu' 	=> [
			'required' 		=> 'Pekerjaan ibu wajib diisi dan tidak boleh kosong.',
		],

		'penghasilan_ibu' 	=> [
			'required' 		=> 'penghasilan ibu wajib diisi dan tidak boleh kosong.',
		],

		'no_hp_ibu' 		=> [
			'required' 		=> 'No. Handphone ibu wajib diisi dan tidak boleh kosong.',
		],

		'email_ibu' 		=> [
			'required' 		=> 'Email ayah wajib diisi dan tidak boleh kosong.',
			'valid_email'	=> 'Email ayah kurang valid, silahkan ulangi dengan email yang benar',
		],


		'nama_wali' 		=> [
			'required' 		=> 'Nama wali wajib diisi dan tidak boleh kosong.',
		],

		'nik_wali' 			=> [
			'required' 		=> 'NIK wali wajib diisi dan tidak boleh kosong.',
		],

		'tempat_lahir_wali' => [
			'required' 		=> 'Tempat wali ayah wajib diisi dan tidak boleh kosong.',
		],

		'tgl_lahir_wali' 	=> [
			'required' 		=> 'Tanggal lahir wali wajib diisi dan tidak boleh kosong.',
		],

		'pendidikan_wali' 	=> [
			'required' 		=> 'Pendidikan wali wajib diisi dan tidak boleh kosong.',
		],

		'pekerjaan_wali' 	=> [
			'required' 		=> 'Pekerjaan wali wajib diisi dan tidak boleh kosong.',
		],

		'penghasilan_wali' 	=> [
			'required' 		=> 'penghasilan wali wajib diisi dan tidak boleh kosong.',
		],

		'no_hp_wali' 		=> [
			'required' 		=> 'No. Handphone wali wajib diisi dan tidak boleh kosong.',
		],

		'email_wali' 		=>
		[
			'required' 		=> 'Email wali wajib diisi dan tidak boleh kosong.',
			'valid_email'	=> 'Email ayah kurang valid, silahkan ulangi dengan email yang benar',
		],
	];

	public $periodik = [
		'no_nisn' 				=> 'is_unique[tb_periodik.no_nisn]',
		'tinggi' 				=> 'required',
		'berat' 				=> 'required',
		'jarak'					=> 'required',
		'waktu_tempuh_menit' 	=> 'required',
		'jumlah_saudara' 		=> 'required',
		'anak_ke' 				=> 'required',
		'telp' 					=> 'required',
	];

	public $periodik_errors = [

		'no_nisn' 			=> [
			'is_unique' 	=> 'Data yang anda masukan sudah terdaftar, mohon cek data anda kembali.',
		],

		'tinggi' 		=> [
			'required' 		=> 'Tinggi badan wajib diisi dan tidak boleh kosong.',
		],

		'berat' 		=> [
			'required' 		=> 'Berat badan wajib diisi dan tidak boleh kosong.',
		],

		'jarak' 			=> [
			'required' 		=> 'Jarak wajib diisi dan tidak boleh kosong.',
		],

		'waktu_tempuh_menit' 	=> [
			'required' 		=> 'Waktu tempuh menit wajib diisi dan tidak boleh kosong.',
		],

		'jumlah_saudara' 	=> [
			'required' 		=> 'jumlah saudara wajib diisi dan tidak boleh kosong.',
		],

		'anak_ke' 	=> [
			'required' 		=> 'Urutan anak wajib diisi dan tidak boleh kosong.',
		],

		'telp' 	=> [
			'required' 		=> 'Telephone rumah wajib diisi dan tidak boleh kosong.',
		],
	];

	public $berkas = [
		'no_id' 			=> 'is_unique[tb_berkas.no_id]',
		// 'kartu_keluarga' 	=> 'uploaded[kartu_keluarga]|mime_in[kartu_keluarga,image/jpg,image/png,image/jpeg,image/gif,image/png]|max_size[kartu_keluarga,512]',
		'akta_kelahiran' 	=> 'uploaded[akta_kelahiran]|mime_in[akta_kelahiran,image/jpg,image/png,image/jpeg,image/gif,image/png]|max_size[akta_kelahiran,1000]',
		// 'ktp_ortu' 			=> 'uploaded[ktp_ortu]|mime_in[ktp_ortu,image/jpg,image/png,image/jpeg,image/gif,image/png]|max_size[ktp_ortu,512]',
		// 'siswa' 			=> 'uploaded[siswa]|mime_in[siswa,image/jpg,image/png,image/jpeg,image/gif,image/png]|max_size[siswa,512]',
		'bayar' 			=> 'uploaded[bayar]|mime_in[bayar,image/jpg,image/png,image/jpeg,image/gif,image/png]|max_size[bayar,1000]',
	];

	public $berkas_errors = [
		'no_id' 	=> [
			'is_unique' 	=> 'Data yang anda masukan sudah terdaftar, mohon cek data anda kembali.',
		],

		'kartu_keluarga' 	=> [
			'uploaded' 		=> 'Foto Kartu Keluarga wajib disertakan dan tidak boleh kosong.',
			'mime_in'		=> 'Format file tidak support hanya untuk .jpg / .png / .jpeg / .gif',
			'max_size'		=> 'Ukuran Foto Kartu Keluarga maksimal 512 Kb',
		],

		'akta_kelahiran' 	=> [
			'uploaded' 		=> 'Foto Akta Kelahiran wajib disertakan dan tidak boleh kosong.',
			'mime_in'		=> 'Format file tidak support hanya untuk .jpg / .png / .jpeg / .gif',
			'max_size'		=> 'Ukuran Foto Kartu Keluarga maksimal 1 Mb',
		],

		'ktp_ortu' 	=> [
			'uploaded' 		=> 'Foto KTP Orang Tua wajib disertakan dan tidak boleh kosong.',
			'mime_in'		=> 'Format file tidak support hanya untuk .jpg / .png / .jpeg / .gif',
			'max_size'		=> 'Ukuran Foto KTP Ayah maksimal 512 Kb',
		],

		'siswa' 	=> [
			'uploaded' 		=> 'Foto Siswa wajib disertakan dan tidak boleh kosong.',
			'mime_in'		=> 'Format file tidak support hanya untuk .jpg / .png / .jpeg / .gif',
			'max_size'		=> 'Ukuran Foto Siswa maksimal 512 Kb',
		],

		'bayar' 			=> [
			'uploaded' 		=> 'Bukti Pembayaran wajib disertakan dan tidak boleh kosong.',
			'mime_in'		=> 'Format file tidak support hanya untuk .jpg / .png / .jpeg / .gif',
			'max_size'		=> 'Ukuran Foto Bukti Pembayaran maksimal 1 Mb',
		],
	];
}
