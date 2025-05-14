<?php
// 由 Python 腳本自動產生
$questions = [
    [
        'id' => '1-01',
        'question' => 'Boot Loader 於開機時會讀取的系統核⼼為下列哪⼀項?',
        'options' => [
            [
                'label' => '/boot/kernel',
                'value' => 'A'
            ],
            [
                'label' => '/boot/vmlinuz',
                'value' => 'B'
            ],
            [
                'label' => '/boot/system',
                'value' => 'C'
            ],
            [
                'label' => '/boot/initrd.img',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-02',
        'question' => '在/etc/inittab 檔案中，不應將預設的 Run Level 設定為下列哪些值?(複選)',
        'options' => [
            [
                'label' => '0',
                'value' => 'A'
            ],
            [
                'label' => '1',
                'value' => 'B'
            ],
            [
                'label' => '4',
                'value' => 'C'
            ],
            [
                'label' => '6',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ACD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-03',
        'question' => '下列哪⼀個⽬錄中的檔案，是開機時 Kernel 依據⽬前執行環境自動產生的?',
        'options' => [
            [
                'label' => '/temp',
                'value' => 'A'
            ],
            [
                'label' => '/opt',
                'value' => 'B'
            ],
            [
                'label' => '/root',
                'value' => 'C'
            ],
            [
                'label' => '/proc',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-04',
        'question' => '想要看電腦所有磁碟與其掛載點，可使用下列哪些指令?(複選)',
        'options' => [
            [
                'label' => 'du',
                'value' => 'A'
            ],
            [
                'label' => 'mount',
                'value' => 'B'
            ],
            [
                'label' => 'fdisk',
                'value' => 'C'
            ],
            [
                'label' => 'df',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-05',
        'question' => '關於 Linux 的敘述，下列哪⼀項錯誤?',
        'options' => [
            [
                'label' => 'Linux 遵循 POSIX 的標準開發與現今 System V 及 BSD 等 Unix 相容',
                'value' => 'A'
            ],
            [
                'label' => '無法安裝於筆記型電腦，只能裝於桌上型 PC 及網路伺服器',
                'value' => 'B'
            ],
            [
                'label' => 'Linux 提供非常完善網路功能',
                'value' => 'C'
            ],
            [
                'label' => 'Linux 是多人多工的作業系統',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-06',
        'question' => '登入 root 管理者帳戶後出現提示字元[root@localhost ~]# ，請問提示字元中的[/root]是指下列哪些項⽬?         (複選)',
        'options' => [
            [
                'label' => '⽬前所有工作⽬錄',
                'value' => 'A'
            ],
            [
                'label' => '帳戶登入名稱',
                'value' => 'B'
            ],
            [
                'label' => '管理者名稱',
                'value' => 'C'
            ],
            [
                'label' => '管理者家⽬錄',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-07',
        'question' => '下列哪⼀項指令，可以察看⽬前開機屬於哪⼀個 Run Level?',
        'options' => [
            [
                'label' => 'level',
                'value' => 'A'
            ],
            [
                'label' => 'run level',
                'value' => 'B'
            ],
            [
                'label' => 'telinit',
                'value' => 'C'
            ],
            [
                'label' => 'runlevel',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-08',
        'question' => '下列哪些指令可以將 Run Level 更改至 Run Level 3? (複選)',
        'options' => [
            [
                'label' => 'init 3',
                'value' => 'A'
            ],
            [
                'label' => 'Runlevel 3',
                'value' => 'B'
            ],
            [
                'label' => 'telinit 3',
                'value' => 'C'
            ],
            [
                'label' => 'runlevel 3',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-09',
        'question' => '在 systemd 程序下，若要變更或增加⼀個 system 服務的相關參數，下列敘述哪⼀項正確?',
        'options' => [
            [
                'label' => '加入命令於/etc/systemd/system 其優先權低於/lib/systemd/system',
                'value' => 'A'
            ],
            [
                'label' => '/etc/systemd/system 與/lib/systemd/system 的內容必須相同',
                'value' => 'B'
            ],
            [
                'label' => '加入命令於/etc/systemd/system 其優先權高於/lib/systemd/system',
                'value' => 'C'
            ],
            [
                'label' => '/lib/systemd/system 為/etc/systemd/system 的符號連結',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-10',
        'question' => '安裝 Linux 時，下列哪⼀項⼀定要切成單獨分割區的掛載點?',
        'options' => [
            [
                'label' => 'Swap',
                'value' => 'A'
            ],
            [
                'label' => '/tmp',
                'value' => 'B'
            ],
            [
                'label' => '/var',
                'value' => 'C'
            ],
            [
                'label' => '/usr',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-11',
        'question' => '下列哪些指令可用來登出系統? (複選)',
        'options' => [
            [
                'label' => 'logout',
                'value' => 'A'
            ],
            [
                'label' => 'quit',
                'value' => 'B'
            ],
            [
                'label' => 'reset',
                'value' => 'C'
            ],
            [
                'label' => 'exit',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-12',
        'question' => '加掛了⼀個新硬碟/dev/hdb，請問 fdisk 完成後重新開機，可使用下列那些方式格式化/dev/hdb1 分割區成 ext3 日誌檔案系統? (複選)',
        'options' => [
            [
                'label' => 'format  /dev/hdb1',
                'value' => 'A'
            ],
            [
                'label' => 'mkfs –t ext3 /dev/hdb1',
                'value' => 'B'
            ],
            [
                'label' => 'mke2fs –j /dev/hdb1',
                'value' => 'C'
            ],
            [
                'label' => 'mkformat –t ext3 /dev/hdb1',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-13',
        'question' => '安裝新的硬碟分割區/dev/hdb1 後，要開機時自動掛載/dev/hdb1，需要在下列哪⼀項檔案中設定自動掛載?',
        'options' => [
            [
                'label' => '/etc/inittab',
                'value' => 'A'
            ],
            [
                'label' => '/etc/fstab',
                'value' => 'B'
            ],
            [
                'label' => '/var/disktab',
                'value' => 'C'
            ],
            [
                'label' => '/usr/ disktab',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-14',
        'question' => '若欲掛載光碟片，下列哪⼀種指令最為標準及正確?',
        'options' => [
            [
                'label' => 'mount /mnt/cdrom',
                'value' => 'A'
            ],
            [
                'label' => 'mount –t iso9660 /dev/cdrom/mnt/cdrom',
                'value' => 'B'
            ],
            [
                'label' => 'mount /dev/cdrom',
                'value' => 'C'
            ],
            [
                'label' => 'mount /mnt/cdrom /dev/cdrom',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-15',
        'question' => '下列哪⼀項是列印檔案的指令?',
        'options' => [
            [
                'label' => 'lpp readme.txt',
                'value' => 'A'
            ],
            [
                'label' => 'lpq readme.txt',
                'value' => 'B'
            ],
            [
                'label' => 'lpd readme.txt',
                'value' => 'C'
            ],
            [
                'label' => 'lpr readme.txt',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-16',
        'question' => '下列哪⼀位為 Linux 作業系統核⼼的創始人?',
        'options' => [
            [
                'label' => 'Bill Gates',
                'value' => 'A'
            ],
            [
                'label' => 'Linus Torvalds',
                'value' => 'B'
            ],
            [
                'label' => 'Michael Jordan',
                'value' => 'C'
            ],
            [
                'label' => 'Randy Johnson',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-17',
        'question' => 'Linux 可安裝於下列哪些硬體架構之上?(複選)',
        'options' => [
            [
                'label' => 'Intel x86',
                'value' => 'A'
            ],
            [
                'label' => 'Sparc',
                'value' => 'B'
            ],
            [
                'label' => 'Alpha',
                'value' => 'C'
            ],
            [
                'label' => 'PowerPC',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABCD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-18',
        'question' => '關於 Run Level 的敘述，下列哪⼀項錯誤?',
        'options' => [
            [
                'label' => 'Run Level 0 為重新開機(Reboot)',
                'value' => 'A'
            ],
            [
                'label' => 'Run Level 1 為單人使用者模式(Single User Mode)',
                'value' => 'B'
            ],
            [
                'label' => 'Run Level 3 為多人使用者模式(Multi User Mode)',
                'value' => 'C'
            ],
            [
                'label' => 'Run Level 5 為 X Window 模式，開機直接進入 X Window 環境',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-19',
        'question' => '關於系統啟動 Script 的敘述，下列哪⼀項錯誤?Level 3 時執行Level 時會啟動的 ScriptLevel 時會停止的 Script',
        'options' => [
            [
                'label' => '系統啟動時所執行的 Script ， 通常存放於/etc/rc.d 之下的不同子⽬錄',
                'value' => 'A'
            ],
            [
                'label' => '存放於/etc/rc.d/rc3.d ⽬錄之下的 Script，將於系統啟動於 Run',
                'value' => 'B'
            ],
            [
                'label' => '若該 Script 的名稱為 S 開頭 ， 例如:S10network ， 則代表進入該 Run',
                'value' => 'C'
            ],
            [
                'label' => '若該 Script 的名稱為 H 開頭，例如:H70nfsd，則代表進入該 Run',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-20',
        'question' => '若將系統啟動至單人模式(Single User Mode) ，下列哪⼀個⽬錄所定義的 Script 會被執行?',
        'options' => [
            [
                'label' => '/etc/rc0.d 或/etc/rc.d/rc0.d',
                'value' => 'A'
            ],
            [
                'label' => '/etc/rc1.d 或 /etc/rc.d/rc1.d',
                'value' => 'B'
            ],
            [
                'label' => '/etc/rc2.d 或 /etc/rc.d/rc2.d',
                'value' => 'C'
            ],
            [
                'label' => '/etc/rc3.d 或 /etc/rc.d/rc3.d',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-21',
        'question' => '下列哪⼀項指令 ， 可以得知系統主機板所使用晶片組及控制器之廠牌及型號?',
        'options' => [
            [
                'label' => 'lspci',
                'value' => 'A'
            ],
            [
                'label' => 'getpci',
                'value' => 'B'
            ],
            [
                'label' => 'showpci',
                'value' => 'C'
            ],
            [
                'label' => 'Pciinfo',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-22',
        'question' => '下列哪⼀項指令，可以在終端機的文字視窗下，捲回至先前的頁面， 以便檢視各種開機資訊及錯誤訊息?',
        'options' => [
            [
                'label' => 'Alt-PageUp/PageDown',
                'value' => 'A'
            ],
            [
                'label' => 'Ctrl-PageUp/PageDown',
                'value' => 'B'
            ],
            [
                'label' => 'Shift-PageUp/PageDown',
                'value' => 'C'
            ],
            [
                'label' => 'Tab-PageUp/PageDown',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-23',
        'question' => '若使用 shutdown -F now 進行關機，會出現下列哪⼀項狀況?',
        'options' => [
            [
                'label' => '下次啟動時進行 fsck',
                'value' => 'A'
            ],
            [
                'label' => '下次啟動時不進行 fsck',
                'value' => 'B'
            ],
            [
                'label' => '下次啟動時將會快速啟動',
                'value' => 'C'
            ],
            [
                'label' => '加快關機速度',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-24',
        'question' => '下列哪⼀項指令，可以顯示⽬前系統所使用之 IRQ 狀態?',
        'options' => [
            [
                'label' => 'cat /proc/interrupts',
                'value' => 'A'
            ],
            [
                'label' => 'cat /proc/irq',
                'value' => 'B'
            ],
            [
                'label' => 'cat /proc/info/interrupts',
                'value' => 'C'
            ],
            [
                'label' => 'cat /proc/info/irq',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-25',
        'question' => '若我們自行撰寫了⼀⽀系統狀態偵測程式 ， 希望於每次系統重新路動時，透過無線訊號通知系統管理者。請問應該將該程式的執行 Script 放在下列哪⼀⽬錄?',
        'options' => [
            [
                'label' => '/etc/rc.d/rc3.d/',
                'value' => 'A'
            ],
            [
                'label' => '/etc/rc.d/rc4.d/',
                'value' => 'B'
            ],
            [
                'label' => '/etc/rc.d/rcs.d/',
                'value' => 'C'
            ],
            [
                'label' => '/etc/rc.d/rc6.d/',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-26',
        'question' => '如果要將主機關機，進行硬體維護，可以使用下列哪些指令?(複選)',
        'options' => [
            [
                'label' => 'reboot',
                'value' => 'A'
            ],
            [
                'label' => 'init 0',
                'value' => 'B'
            ],
            [
                'label' => 'shutdown –r',
                'value' => 'C'
            ],
            [
                'label' => 'shutdown –h',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-27',
        'question' => '下列哪些指令可重新啟動 Linux 系統?(複選)',
        'options' => [
            [
                'label' => 'shutdown -r now',
                'value' => 'A'
            ],
            [
                'label' => 'init 6',
                'value' => 'B'
            ],
            [
                'label' => 'reboot',
                'value' => 'C'
            ],
            [
                'label' => 'warmboot',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-28',
        'question' => '使用 systemd 的 Fedora 系統，若要執行關閉系統，下列哪⼀項指令錯誤?',
        'options' => [
            [
                'label' => 'halt',
                'value' => 'A'
            ],
            [
                'label' => 'poweroff',
                'value' => 'B'
            ],
            [
                'label' => 'shutdown -P now',
                'value' => 'C'
            ],
            [
                'label' => 'init 0',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-29',
        'question' => '下列哪些設備對作業系統來說是輸入設備?(複選)',
        'options' => [
            [
                'label' => '螢幕',
                'value' => 'A'
            ],
            [
                'label' => '滑鼠',
                'value' => 'B'
            ],
            [
                'label' => '喇叭',
                'value' => 'C'
            ],
            [
                'label' => '鍵盤',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-30',
        'question' => 'Linux 中，下列哪⼀項組合鍵可以切換終端以進行多次性登入?',
        'options' => [
            [
                'label' => '[Ctrl]+[Alt]+[Fn] (1<=n<=7) 鍵',
                'value' => 'A'
            ],
            [
                'label' => '[Ctrl]+[Shift]+[Fn] (1<=n<=7) 鍵',
                'value' => 'B'
            ],
            [
                'label' => '[Alt]+[Shift]+[Fn] (1<=n<=7) 鍵',
                'value' => 'C'
            ],
            [
                'label' => '[Ctrl]+[Alt]+[Shift]+[Fn] (1<=n<=7) 鍵',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-31',
        'question' => '若在 Linux 上執行了 runlevel 這個指令，且看到結果 : 3  5，請問下列哪⼀項描述是正確的?',
        'options' => [
            [
                'label' => '當前 Run Level 在 5，上⼀次在 3',
                'value' => 'A'
            ],
            [
                'label' => '當前 Run Level 在 3，上⼀次在 5',
                'value' => 'B'
            ],
            [
                'label' => '當前 Run Level 在 3，下⼀次在 5',
                'value' => 'C'
            ],
            [
                'label' => '當前 Run Level 在 5，下⼀次在 3',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-32',
        'question' => '下列哪些命令可將/etc/hosts 列印出來?(複選)',
        'options' => [
            [
                'label' => 'ptr - Plpo /etc/hosts',
                'value' => 'A'
            ],
            [
                'label' => 'Ipr -Plpo /etc/hosts',
                'value' => 'B'
            ],
            [
                'label' => 'cat /etc/hosts | lpr –Plpo',
                'value' => 'C'
            ],
            [
                'label' => 'cat /etc/hosts | Ipr – Ipo',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-33',
        'question' => '關於切換 Run Level 的指令敘述，下列哪⼀項正確?',
        'options' => [
            [
                'label' => '僅能使用 runlevel 切換',
                'value' => 'A'
            ],
            [
                'label' => '僅能使用 telinit 切換',
                'value' => 'B'
            ],
            [
                'label' => '僅能使用 init 切換',
                'value' => 'C'
            ],
            [
                'label' => '使用 telinit 或 init 均可切換',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-34',
        'question' => '對⼀般使用者來說，下列哪⼀項不是 Linux 文字介面的優點?',
        'options' => [
            [
                'label' => '免費',
                'value' => 'A'
            ],
            [
                'label' => '多工',
                'value' => 'B'
            ],
            [
                'label' => '操作容易',
                'value' => 'C'
            ],
            [
                'label' => '系統穩定',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-35',
        'question' => '安装 Linux 最少⼀定要有下列哪些分割?(複選)',
        'options' => [
            [
                'label' => '/boot',
                'value' => 'A'
            ],
            [
                'label' => '/',
                'value' => 'B'
            ],
            [
                'label' => '/home',
                'value' => 'C'
            ],
            [
                'label' => 'Swap',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-36',
        'question' => '若要從 Linux 圖形模式切換到文字模式，可按下列哪⼀項組合鍵?',
        'options' => [
            [
                'label' => '[Ctrl]+[Shift]+[Esc] 鍵',
                'value' => 'A'
            ],
            [
                'label' => '[Ctrl]+[Alt]+[F1] 鍵',
                'value' => 'B'
            ],
            [
                'label' => '[Shift]+[Alt]+[F1] 鍵',
                'value' => 'C'
            ],
            [
                'label' => '[Shift]+[Alt]+[Esc] 鍵',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-37',
        'question' => '想要開機之後自動進入文字模式，應使用下列哪⼀項方式進行設定?/etc/systemd/system/default.target',
        'options' => [
            [
                'label' => '修改開機設定檔/etc/inittab',
                'value' => 'A'
            ],
            [
                'label' => '執行指令 ln -sf /lib/systemd/system/multi-user.target',
                'value' => 'B'
            ],
            [
                'label' => '執行指令 systemctl isolate runlevel3.target',
                'value' => 'C'
            ],
            [
                'label' => '將 id:3:initdefault: 加入/etc/systemd/system/default.ta rget',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-38',
        'question' => '下列哪⼀項指令會使系統五分鐘後自動關機?',
        'options' => [
            [
                'label' => 'init 5',
                'value' => 'A'
            ],
            [
                'label' => 'shutdown -r +5',
                'value' => 'B'
            ],
            [
                'label' => 'shutdown -h +5',
                'value' => 'C'
            ],
            [
                'label' => 'shutdown -k +5',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-39',
        'question' => '下列哪些指令可以將系統重新開機? (複選)',
        'options' => [
            [
                'label' => 'reboot',
                'value' => 'A'
            ],
            [
                'label' => 'shutdown –r',
                'value' => 'B'
            ],
            [
                'label' => 'shutdown –h',
                'value' => 'C'
            ],
            [
                'label' => 'init 6',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-40',
        'question' => '要查看 Linux 的開機訊息，可使用下列哪⼀個指令?',
        'options' => [
            [
                'label' => 'messages',
                'value' => 'A'
            ],
            [
                'label' => 'dmesg',
                'value' => 'B'
            ],
            [
                'label' => 'last',
                'value' => 'C'
            ],
            [
                'label' => 'vmstat',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-41',
        'question' => '在執行層級的/etc/rc.d/re*.d/⽬錄下，以 K 為開頭的檔案是代表下列哪⼀項意思?',
        'options' => [
            [
                'label' => '被停止的服務',
                'value' => 'A'
            ],
            [
                'label' => '被暫停的服務',
                'value' => 'B'
            ],
            [
                'label' => '被限制的服務',
                'value' => 'C'
            ],
            [
                'label' => '被啟動的服務',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-42',
        'question' => '關於 Linux 核⼼版本的命名方式，下列哪些正確?(複選)',
        'options' => [
            [
                'label' => '偶數代表穩定版',
                'value' => 'A'
            ],
            [
                'label' => '偶數代表測試版',
                'value' => 'B'
            ],
            [
                'label' => '奇數代表測試版',
                'value' => 'C'
            ],
            [
                'label' => '奇數代表穩定版',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-43',
        'question' => 'Systemd 經由 systemd.unit= 命令列選項解析⽬前 Kernel 所要執行的參數。下列 systemd.unit= 的選項哪⼀項錯誤?',
        'options' => [
            [
                'label' => 'systemd.unit=multi-user.target',
                'value' => 'A'
            ],
            [
                'label' => 'systemd.unit=emergency.target',
                'value' => 'B'
            ],
            [
                'label' => 'systemd.unit=graphical.target',
                'value' => 'C'
            ],
            [
                'label' => 'systemd.unit-single-user.target',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-44',
        'question' => '下列哪⼀項檔案記錄印表機的組態檔?',
        'options' => [
            [
                'label' => '/etc/print.conf',
                'value' => 'A'
            ],
            [
                'label' => '/etc/printcap',
                'value' => 'B'
            ],
            [
                'label' => '/etc/printcfg',
                'value' => 'C'
            ],
            [
                'label' => '/etc/print',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-45',
        'question' => '要删除列印工作是使用下列哪⼀項指令?',
        'options' => [
            [
                'label' => 'Ip –r',
                'value' => 'A'
            ],
            [
                'label' => 'Ip –d',
                'value' => 'B'
            ],
            [
                'label' => 'Iprm',
                'value' => 'C'
            ],
            [
                'label' => 'Ipq',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-46',
        'question' => '若要卸載或退出光碟，可使用下列哪些指令?(複選)',
        'options' => [
            [
                'label' => 'umount',
                'value' => 'A'
            ],
            [
                'label' => 'unmount',
                'value' => 'B'
            ],
            [
                'label' => 'reject',
                'value' => 'C'
            ],
            [
                'label' => 'eject',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-47',
        'question' => '若想要將/etc/fstab 下所有記載掛載的檔案系統全部掛載 ， 應使用下列哪⼀個指令?',
        'options' => [
            [
                'label' => 'mount –t',
                'value' => 'A'
            ],
            [
                'label' => 'mount –f',
                'value' => 'B'
            ],
            [
                'label' => 'mount all',
                'value' => 'C'
            ],
            [
                'label' => 'mount –a',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '1-48',
        'question' => '下列哪些為系統 Kernel 的⼀部分?(複選)',
        'options' => [
            [
                'label' => 'X Window',
                'value' => 'A'
            ],
            [
                'label' => 'Bash',
                'value' => 'B'
            ],
            [
                'label' => '硬體驅動程式',
                'value' => 'C'
            ],
            [
                'label' => 'TCP/IP',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'CD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-49',
        'question' => '在不重新啟動電腦的前提下，可使用下列哪些指令切換不同的 Run Level?(複選)',
        'options' => [
            [
                'label' => '下⼀個指令 runlevel X，X 為 runlevel 的值',
                'value' => 'A'
            ],
            [
                'label' => '下⼀個指令 init X，X 為 runlevel 的值',
                'value' => 'B'
            ],
            [
                'label' => '下⼀個指令 run X，X 為 runlevel 的值',
                'value' => 'C'
            ],
            [
                'label' => '下⼀個指令 telinit X，X 為 runlevel 的值',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '1-50',
        'question' => '下列哪些指令可以使系統進行關機 (Power off) 程序?(複選)',
        'options' => [
            [
                'label' => 'shutdown -h now',
                'value' => 'A'
            ],
            [
                'label' => 'init 0',
                'value' => 'B'
            ],
            [
                'label' => '[Alt]+[Ctrl]+[Del] 鍵',
                'value' => 'C'
            ],
            [
                'label' => 'shutdown –c',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AB',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-01',
        'question' => '有⼀個重要的檔案 foo 不能被任何人刪除、改名、寫入或變更資料， 可執行下列哪⼀項指令將檔案隱藏屬性?',
        'options' => [
            [
                'label' => 'chmod o-w foo',
                'value' => 'A'
            ],
            [
                'label' => 'chattr +i foo',
                'value' => 'B'
            ],
            [
                'label' => 'chattr +a foo',
                'value' => 'C'
            ],
            [
                'label' => 'chmod 644 foo',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-02',
        'question' => '下列哪⼀項指令，不是使用檔案名稱來搜尋系統中的檔案位置?',
        'options' => [
            [
                'label' => 'locate',
                'value' => 'A'
            ],
            [
                'label' => 'find',
                'value' => 'B'
            ],
            [
                'label' => 'whereis',
                'value' => 'C'
            ],
            [
                'label' => 'file',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-03',
        'question' => '系統預設的 umask 設定是記錄在下列哪⼀項檔案中?',
        'options' => [
            [
                'label' => '/etc/basher',
                'value' => 'A'
            ],
            [
                'label' => '/etc/basb_profile',
                'value' => 'B'
            ],
            [
                'label' => '/etc/profile',
                'value' => 'C'
            ],
            [
                'label' => '/etc/chs.login',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-04',
        'question' => '假如想看到某個檔案 test.txt 的全部内容時，下列哪些指令可以達到此⽬的?(複選)',
        'options' => [
            [
                'label' => 'cat test.txt',
                'value' => 'A'
            ],
            [
                'label' => 'tail test.txt',
                'value' => 'B'
            ],
            [
                'label' => 'pr test.txt',
                'value' => 'C'
            ],
            [
                'label' => 'more test.txt',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ACD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-05',
        'question' => 'Linux 的 Bash Shell 操作環境中⽀援下列哪些功能?(複選)',
        'options' => [
            [
                'label' => '提供 Alias 别名設定功能',
                'value' => 'A'
            ],
            [
                'label' => '按[Tab]鍵可以指令補齊',
                'value' => 'B'
            ],
            [
                'label' => '可用?號查詢指令用法，例如: ls /?',
                'value' => 'C'
            ],
            [
                'label' => '提供 History 歷史命令功能，方便使用者操作',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-06',
        'question' => '在 Vi 編輯器中，按下列哪些按鍵可以開始編輯輸入文字?(複選)',
        'options' => [
            [
                'label' => '[w] 鍵',
                'value' => 'A'
            ],
            [
                'label' => '[i] 鍵',
                'value' => 'B'
            ],
            [
                'label' => '[a] 鍵',
                'value' => 'C'
            ],
            [
                'label' => '[o] 鍵',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BCD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-07',
        'question' => '/data ⽬錄中含有 readme 及 install 兩個檔案，應該使用下列哪⼀項指令直接刪除/data ⽬錄及檔案?',
        'options' => [
            [
                'label' => 'rmdir /data',
                'value' => 'A'
            ],
            [
                'label' => 'rm /data',
                'value' => 'B'
            ],
            [
                'label' => 'del /data',
                'value' => 'C'
            ],
            [
                'label' => 'rm -rf /data',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-08',
        'question' => 'cat 指令中加入下列哪些項⽬指令，可顯示 test 檔案內容並加入行號?(複選)',
        'options' => [
            [
                'label' => 'cat –l test',
                'value' => 'A'
            ],
            [
                'label' => 'cat –b test',
                'value' => 'B'
            ],
            [
                'label' => 'cat –n test',
                'value' => 'C'
            ],
            [
                'label' => 'cat –u test',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-09',
        'question' => '關於 touch 指令的敘述，下列哪些正確?(複選)',
        'options' => [
            [
                'label' => '產生空白檔案',
                'value' => 'A'
            ],
            [
                'label' => '用來備份檔案',
                'value' => 'B'
            ],
            [
                'label' => '合併兩個檔案',
                'value' => 'C'
            ],
            [
                'label' => '更新檔案日期',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-10',
        'question' => '請問 mv 指令在 Shell 中的作用為下列哪些項⽬?(複選)',
        'options' => [
            [
                'label' => '搬移檔案',
                'value' => 'A'
            ],
            [
                'label' => '更改檔案名稱',
                'value' => 'B'
            ],
            [
                'label' => '移除檔案',
                'value' => 'C'
            ],
            [
                'label' => '產生空白檔',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AB',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-11',
        'question' => '指令 cat –n < test1 > test2 是代表下列哪⼀種意思?',
        'options' => [
            [
                'label' => '將 test1 合併到 test2',
                'value' => 'A'
            ],
            [
                'label' => '將 test1 重導到 test2',
                'value' => 'B'
            ],
            [
                'label' => '將 test2 合併到 test1',
                'value' => 'C'
            ],
            [
                'label' => '將 test1 加入列號重導到 test2',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-12',
        'question' => '關於指令 cat/etc/passwd | grep \'vincent\'的敘述，下列哪⼀項正 確?',
        'options' => [
            [
                'label' => '列出/etc/passwd 所有内容',
                'value' => 'A'
            ],
            [
                'label' => '只顯示/etc/passwd 中有 vincent 字串的整列',
                'value' => 'B'
            ],
            [
                'label' => '列出/etc/passwd 中 vincent 的字串有幾個',
                'value' => 'C'
            ],
            [
                'label' => '清掉 vincent 字串，並顯示其部分',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-13',
        'question' => '在 Vi 編輯器中 Last line mode 命令列模式輸入/abc，當找到第⼀個abc 字串時，按下列哪⼀個鍵可搜尋下⼀個 abc 字串?',
        'options' => [
            [
                'label' => '[n]鍵',
                'value' => 'A'
            ],
            [
                'label' => '[N]鍵',
                'value' => 'B'
            ],
            [
                'label' => '[s]鍵',
                'value' => 'C'
            ],
            [
                'label' => '[S]鍵',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-14',
        'question' => '在 Vi 編輯器中，由編輯模式切換至指令模式，可使用下列哪⼀項指令達成此需求?',
        'options' => [
            [
                'label' => 'q',
                'value' => 'A'
            ],
            [
                'label' => 'w',
                'value' => 'B'
            ],
            [
                'label' => '<Esc>',
                'value' => 'C'
            ],
            [
                'label' => '<Alt>',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-15',
        'question' => '下列哪⼀項指令可以跳出 Vi 編輯器，放棄之前所有更改，而且不儲存檔案?',
        'options' => [
            [
                'label' => ':w!',
                'value' => 'A'
            ],
            [
                'label' => ':a!',
                'value' => 'B'
            ],
            [
                'label' => ':q!',
                'value' => 'C'
            ],
            [
                'label' => ':x!',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-16',
        'question' => '下列哪⼀項指令可以顯示⽬前所在的工作⽬錄?',
        'options' => [
            [
                'label' => 'show',
                'value' => 'A'
            ],
            [
                'label' => 'dir',
                'value' => 'B'
            ],
            [
                'label' => 'set',
                'value' => 'C'
            ],
            [
                'label' => 'pwd',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-17',
        'question' => '下列哪⼀項是執行指令 chmod 644/bin/lis 所造成的結果?',
        'options' => [
            [
                'label' => '系統將無法重新開機',
                'value' => 'A'
            ],
            [
                'label' => '所有使用者都無法登入',
                'value' => 'B'
            ],
            [
                'label' => '所有使用者都無法執行/bin/ls 指令',
                'value' => 'C'
            ],
            [
                'label' => '除非重新製作系統核⼼，否則無法回覆',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-18',
        'question' => '下列哪⼀項指令，可以更改使用者的預設 Shell ?',
        'options' => [
            [
                'label' => 'chsh',
                'value' => 'A'
            ],
            [
                'label' => 'chsl',
                'value' => 'B'
            ],
            [
                'label' => 'chfn',
                'value' => 'C'
            ],
            [
                'label' => 'chfs',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-19',
        'question' => '下列哪⼀項指令，可以刪除某⼀使用者，並且將其 Home 之下的檔案⼀併刪除?',
        'options' => [
            [
                'label' => 'userdel -r user',
                'value' => 'A'
            ],
            [
                'label' => 'userdel -d user',
                'value' => 'B'
            ],
            [
                'label' => 'userdel -m user',
                'value' => 'C'
            ],
            [
                'label' => 'userdel -l user',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-20',
        'question' => '下列哪些指令可以取得⽬前所有的環境變數?(複選)',
        'options' => [
            [
                'label' => 'proc',
                'value' => 'A'
            ],
            [
                'label' => 'set',
                'value' => 'B'
            ],
            [
                'label' => 'env',
                'value' => 'C'
            ],
            [
                'label' => 'uname',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-21',
        'question' => '關於 su 指令的敘述，下列哪些正確?(複選)指令進行切換密碼，方可順利切換',
        'options' => [
            [
                'label' => '用於切換使用者身分',
                'value' => 'A'
            ],
            [
                'label' => '如果沒有指定欲切換之使用者，預設為切换至系統管理者',
                'value' => 'B'
            ],
            [
                'label' => '⼀旦切換至其他使用者，若欲切換回原本之使用者，必須再次執行 su',
                'value' => 'C'
            ],
            [
                'label' => '無論任何使用者，若欲切換至其他使用者，必須輸入欲切换之使用者的',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AB',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-22',
        'question' => '關於 program1 > /tmp/logfile 的敘述，下列哪些正確?(複選)',
        'options' => [
            [
                'label' => '所有程式執行結果，都會被寫入/tmp/logfile 檔案',
                'value' => 'A'
            ],
            [
                'label' => '所有程式執行結果，將無法顯示於螢幕上',
                'value' => 'B'
            ],
            [
                'label' => '如果程式發生錯誤，所有錯誤訊息也會⼀併寫入/tmp/logfile 檔案',
                'value' => 'C'
            ],
            [
                'label' => '本指令之作用，等同於 program1 | cat > /tmp/logfile',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-23',
        'question' => '關於 program1 | tee /tmp/logfile 的敘述，下列哪些正確?',
        'options' => [
            [
                'label' => '所有程式執行結果，都會被寫入/tmp/logfile 檔案',
                'value' => 'A'
            ],
            [
                'label' => '所有程式執行結果，將無法顯示於螢幕上',
                'value' => 'B'
            ],
            [
                'label' => '如果程式發生錯誤，所有錯誤訊息也會⼀併寫入/tmp/logfile 檔案',
                'value' => 'C'
            ],
            [
                'label' => '本指令之作用，等同於 program1 | cat > /tmp/logfile',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-24',
        'question' => '下列哪⼀項指令，可以讓我們得知⽬前系統核⼼版本及編譯日期?',
        'options' => [
            [
                'label' => 'uname –a',
                'value' => 'A'
            ],
            [
                'label' => 'kernel –info',
                'value' => 'B'
            ],
            [
                'label' => 'Is -al /boot',
                'value' => 'C'
            ],
            [
                'label' => 'cat /proc/kernel/info',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-25',
        'question' => '下列哪些指令，可以讓我們立即切換回個人$HOME ⽬錄?(複選)',
        'options' => [
            [
                'label' => 'cd ~',
                'value' => 'A'
            ],
            [
                'label' => 'cd $HOME',
                'value' => 'B'
            ],
            [
                'label' => 'cd %HOME',
                'value' => 'C'
            ],
            [
                'label' => 'cd echo $HOME\'',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-26',
        'question' => '下列哪⼀項是執行指令 echo \'date +%H:%M\'>file 所造成的結果?',
        'options' => [
            [
                'label' => '“date +%H:%M”這串文字會被寫進 file 檔案裡',
                'value' => 'A'
            ],
            [
                'label' => '“\'date +%H:%M\'”這串文字會被寫進 file 檔案裡',
                'value' => 'B'
            ],
            [
                'label' => '當前時間(小時:分鐘)會被寫進 file 檔案裡',
                'value' => 'C'
            ],
            [
                'label' => '當前時間(小時:分鐘)會被寫進 file 變數裡',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-27',
        'question' => '在 vim 的命令模式中，下列哪些操作可以存檔並離開?(複選)',
        'options' => [
            [
                'label' => ':x',
                'value' => 'A'
            ],
            [
                'label' => 'ZZ',
                'value' => 'B'
            ],
            [
                'label' => ':wq',
                'value' => 'C'
            ],
            [
                'label' => ':ZZ',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-28',
        'question' => '關於指令 find -ctime -7 的敘述，下列哪⼀項正確?',
        'options' => [
            [
                'label' => '列出整個檔案系統內，所有在 7 天以内建立的檔案',
                'value' => 'A'
            ],
            [
                'label' => '列出當前⽬錄内及子⽬錄内，所有在 7 天以内被修改過内容的檔案',
                'value' => 'B'
            ],
            [
                'label' => '列出當前⽬錄內及子⽬錄内，所有在 7 天以内建立的檔案',
                'value' => 'C'
            ],
            [
                'label' => '列出當前⽬錄内及子⽬錄内，所有在 7 天以内狀態變更過的檔案',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-29',
        'question' => '使用下列哪⼀項指令，可以找出某⼀特定使用者所屬的全部群組名稱(含原始群組)?',
        'options' => [
            [
                'label' => 'grep user /etc/group | cut -d: -f1',
                'value' => 'A'
            ],
            [
                'label' => 'grep user /etc/groups | cut -d: -f1',
                'value' => 'B'
            ],
            [
                'label' => 'groups user',
                'value' => 'C'
            ],
            [
                'label' => 'whichgroup -u user',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-30',
        'question' => '關於指令 foo < bar || foobar 的敘述，下列哪⼀項正確?資料',
        'options' => [
            [
                'label' => '命令 foo 從檔案 bar 讀進資料，其結果存進 foobar 檔案中',
                'value' => 'A'
            ],
            [
                'label' => '命令 foo 從 bar 命令結果讀進資料，其結果存進 foobat 檔案中',
                'value' => 'B'
            ],
            [
                'label' => '命令 foo 從檔案 bar 讀進資料，若失敗，則執行 foobar 命令',
                'value' => 'C'
            ],
            [
                'label' => '命令 foo 從檔案 bar 讀進資料，其結果傳給 foobar 命令，當成讀進的',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-31',
        'question' => '假設⽬錄 d1 底下有 f1、f2、f3 三份檔案，自 d2 ⽬錄也可寫入。如執行指令 cp d1 d2，則會造成下列哪⼀項結果?中刪除',
        'options' => [
            [
                'label' => 'd1 ⽬錄會被複製⼀份成為 d2 ⽬錄底下的⼀個子⽬錄',
                'value' => 'A'
            ],
            [
                'label' => 'f1、f2、f3 這三份各被複製⼀份，成為 d2 ⽬錄底下檔案',
                'value' => 'B'
            ],
            [
                'label' => 'f1、f2、f3 這三份各被複製⼀份，成為 d2 ⽬錄底下檔案，並從 d1 ⽬錄',
                'value' => 'C'
            ],
            [
                'label' => '無論 dl、d2 或是 f1、f2、f3 均沒有任何變化，但會得到⼀個錯誤訊息',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-32',
        'question' => '假設⽬錄 d1 當前的權限為 rwxr-xr-x，請問下列哪些指令可將之改為rwxr-x--x?(複選)',
        'options' => [
            [
                'label' => 'chmod g-w，o-r d1',
                'value' => 'A'
            ],
            [
                'label' => 'chmod 751 d1',
                'value' => 'B'
            ],
            [
                'label' => 'chmod 754 d1',
                'value' => 'C'
            ],
            [
                'label' => 'chmod u=rwx，g=rx，o=x d1',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-33',
        'question' => '假設 u1 這位使用者的原始群組為 users ， 但同時加入了 g1 這⼀群組中 。若系統管理員這時執行指令 usermod -G g2，g3 u1，則這時 u1 在下列哪⼀項群組中?',
        'options' => [
            [
                'label' => 'users，g2，g3',
                'value' => 'A'
            ],
            [
                'label' => 'users，g1，g2，g3',
                'value' => 'B'
            ],
            [
                'label' => 'gl，g2，g3',
                'value' => 'C'
            ],
            [
                'label' => 'g2，g3',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-34',
        'question' => '關於執行指令 grep [abc] /etc/* 的敘述，下列哪⼀項正確?顯示顯示',
        'options' => [
            [
                'label' => '在/etc ⽬錄下的檔案名稱中，若含有「abc」文字就將該行顯示',
                'value' => 'A'
            ],
            [
                'label' => '在/etc ⽬錄下的檔案名稱中，若不含「abc」文字就將該行顯示',
                'value' => 'B'
            ],
            [
                'label' => '在/etc ⽬錄下的檔案名稱中，若含有「a」 、 「b」或「c」文字就將該行',
                'value' => 'C'
            ],
            [
                'label' => '在/etc ⽬錄下的檔案名稱中，若不含「a」 、 「b」或「c」文字就將該行',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-35',
        'question' => '在 Vi 的命令模式中，http 的功能是下列哪⼀項?',
        'options' => [
            [
                'label' => '向游標之前尋找名稱為「http」的字串',
                'value' => 'A'
            ],
            [
                'label' => '向游標之後尋找名稱為「http」的字串',
                'value' => 'B'
            ],
            [
                'label' => '顯示含有「http」字串的列數',
                'value' => 'C'
            ],
            [
                'label' => '顯示含有「http」字串的行數',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-36',
        'question' => '關於在 Vi 編輯模式的敘述，下列哪些正確?(複選)',
        'options' => [
            [
                'label' => '「r」取代游標所在的字元',
                'value' => 'A'
            ],
            [
                'label' => '「i」從⽬前游標所在的下⼀個字開始輸入',
                'value' => 'B'
            ],
            [
                'label' => '「a」從⽬前游標所在處插入開始輸入',
                'value' => 'C'
            ],
            [
                'label' => '「o」從⽬前游標所在向下⼀行插入新行',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-37',
        'question' => '下列哪⼀項指令可將檔案更名?',
        'options' => [
            [
                'label' => 'rm',
                'value' => 'A'
            ],
            [
                'label' => 'mv',
                'value' => 'B'
            ],
            [
                'label' => 'cp',
                'value' => 'C'
            ],
            [
                'label' => 'rename',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-38',
        'question' => '下列哪⼀項指令可移除⽬錄及其下的檔案與子⽬錄?',
        'options' => [
            [
                'label' => 'rmdir',
                'value' => 'A'
            ],
            [
                'label' => 'delete',
                'value' => 'B'
            ],
            [
                'label' => 'rm –r',
                'value' => 'C'
            ],
            [
                'label' => 'mv –u',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-39',
        'question' => '下列哪些指令可顯示檔案内容?(複選)',
        'options' => [
            [
                'label' => 'tac',
                'value' => 'A'
            ],
            [
                'label' => 'more',
                'value' => 'B'
            ],
            [
                'label' => 'less',
                'value' => 'C'
            ],
            [
                'label' => 'man',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-40',
        'question' => '下列哪⼀項指令可將隱藏檔顯示出來?',
        'options' => [
            [
                'label' => 'ls -l',
                'value' => 'A'
            ],
            [
                'label' => 'ls -i',
                'value' => 'B'
            ],
            [
                'label' => 'ls -a',
                'value' => 'C'
            ],
            [
                'label' => 'ls -s',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-41',
        'question' => '在/etc/shadow 中，如「adm:* :11979:0:99999:7:::」第六欄 代表下列哪⼀項?',
        'options' => [
            [
                'label' => '密碼需變更的天數',
                'value' => 'A'
            ],
            [
                'label' => '帳號失效期限',
                'value' => 'B'
            ],
            [
                'label' => '帳號取消日期',
                'value' => 'C'
            ],
            [
                'label' => '密碼變更期限前之警告期限',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-42',
        'question' => '關於環境變數 Global 及 Local 的敘述，下列哪些正確?(複選)',
        'options' => [
            [
                'label' => 'Global 變數可被繼承於子程序，而 Local 變數不行',
                'value' => 'A'
            ],
            [
                'label' => '想要顯示⽬前的 Local 變數，可用指令 env',
                'value' => 'B'
            ],
            [
                'label' => '如果要讓 Local 變數成為 Global 變數，可用指令 export',
                'value' => 'C'
            ],
            [
                'label' => '指令 set 可同時顯示出⽬前的 Global 與 Local 變數',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ACD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '2-43',
        'question' => '使用下列哪⼀項指令可取得環境變數 PATH 的值?',
        'options' => [
            [
                'label' => 'echo PATH',
                'value' => 'A'
            ],
            [
                'label' => 'echo $PATH',
                'value' => 'B'
            ],
            [
                'label' => 'echo %PATH',
                'value' => 'C'
            ],
            [
                'label' => 'echo #PATH',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-44',
        'question' => '請問下列哪⼀項不是 Vi 由命令模式進入輸入模式的指令?',
        'options' => [
            [
                'label' => 'a，A',
                'value' => 'A'
            ],
            [
                'label' => 'o，O',
                'value' => 'B'
            ],
            [
                'label' => 'i，I',
                'value' => 'C'
            ],
            [
                'label' => 'p，P',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-45',
        'question' => '在 Vi 的執行模式中，下列哪⼀項指令可以把第三行到最後⼀行所有的foo 改成 FOO 呢?',
        'options' => [
            [
                'label' => ':3，$s/foo/FOO/',
                'value' => 'A'
            ],
            [
                'label' => ':%，$s/foo/FOOg',
                'value' => 'B'
            ],
            [
                'label' => ':3，$s/foo/FOO/g',
                'value' => 'C'
            ],
            [
                'label' => ':%s/foo/FOO/g',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-46',
        'question' => '在 Vi 的命令模式中 ， 下列哪⼀項指令可以複製含游標所在之下五行文字並貼於游標之上⼀行?',
        'options' => [
            [
                'label' => '5yyP',
                'value' => 'A'
            ],
            [
                'label' => '5YYp',
                'value' => 'B'
            ],
            [
                'label' => '5yyp',
                'value' => 'C'
            ],
            [
                'label' => '5ddP',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-47',
        'question' => '如附圖所示，有⼀環境變數 My_school 值為 Taiwan，請問執行附圖中的指令後，其輸出為下列哪⼀項?echo “$My_school” ‘$My_school’ “\$My_school”',
        'options' => [
            [
                'label' => 'Taiwan $My_school $My_school',
                'value' => 'A'
            ],
            [
                'label' => 'Taiwan Taiwan Taiwan',
                'value' => 'B'
            ],
            [
                'label' => '$My_school Taiwan Taiwan',
                'value' => 'C'
            ],
            [
                'label' => '$My_school $My_school Taiwan',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-48',
        'question' => '執行指令 echo "This is Tom\'s textbook" | grep -i ^ t | wc –l 的輸出為下列哪⼀項?',
        'options' => [
            [
                'label' => '0',
                'value' => 'A'
            ],
            [
                'label' => '1',
                'value' => 'B'
            ],
            [
                'label' => '2',
                'value' => 'C'
            ],
            [
                'label' => '3',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-49',
        'question' => '執行指令 chmod 7657 foo， foo 為⼀⽬錄，請問 foo 的存取權限為下列哪⼀項?',
        'options' => [
            [
                'label' => '-rwtr-srws',
                'value' => 'A'
            ],
            [
                'label' => '-rwSr-srwt',
                'value' => 'B'
            ],
            [
                'label' => '-rwsr-Srwt',
                'value' => 'C'
            ],
            [
                'label' => '-rwsr-srwx',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '2-50',
        'question' => '請問下列哪些指令，可將檔案存取權限設為 rwxrwSrwT?(複選)',
        'options' => [
            [
                'label' => 'chmod 3766',
                'value' => 'A'
            ],
            [
                'label' => 'chmod u=rwx， g=rw， g+s， o=rw， o+t',
                'value' => 'B'
            ],
            [
                'label' => 'chmod u=rwx，g=rw，g+s，o=rw，o+t',
                'value' => 'C'
            ],
            [
                'label' => 'chmod u=rwx， g=rwS，o=rwT',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '3-01',
        'question' => '下列哪⼀項指令可以將 EXT2 檔案系統狀態輸出到標準的設備上 ， 用 於分析問題以及檔案系統的資訊?',
        'options' => [
            [
                'label' => 'tune2fs',
                'value' => 'A'
            ],
            [
                'label' => 'mke2fs',
                'value' => 'B'
            ],
            [
                'label' => 'e2fsck',
                'value' => 'C'
            ],
            [
                'label' => 'dumpe2fs',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-02',
        'question' => '關於 Sysfs 的敘述，下列哪⼀項錯誤?Node要是用來設定 Driver 的功能',
        'options' => [
            [
                'label' => '管理 Linux 系統中的週邊元件，配合使用公用程式來自動產生 Device',
                'value' => 'A'
            ],
            [
                'label' => '它是從 Proc 所變化而來並由各個 Driver 自行產生相關檔案',
                'value' => 'B'
            ],
            [
                'label' => '它是繼承 Kobject 的資料結構，其檔名及內容都是 Driver 自行解決，主',
                'value' => 'C'
            ],
            [
                'label' => '它是⼀個實體檔案系統，可用指令 mount -t sysfs sysfs /sys 將其掛載',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-03',
        'question' => '關於/lost+ found 的敘述，下列哪⼀項錯誤?的⽬錄 /disk/lost+found',
        'options' => [
            [
                'label' => '使用標準的 EXT2/EXT3 檔案系統格式才會產生的⼀個⽬錄',
                'value' => 'A'
            ],
            [
                'label' => '當檔案系統發生錯誤時，會將⼀些遺失的資料放置到該⽬錄下',
                'value' => 'B'
            ],
            [
                'label' => '系統重新開機時會將該⽬錄的資料清空',
                'value' => 'C'
            ],
            [
                'label' => '若新加⼀顆硬碟並掛載於/disk ⽬錄中，則系統就會自動產生⼀個這樣',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-04',
        'question' => '下列哪⼀項指令可以用來建置 Software RAID ?',
        'options' => [
            [
                'label' => 'mkfs',
                'value' => 'A'
            ],
            [
                'label' => 'mdadm',
                'value' => 'B'
            ],
            [
                'label' => 'pvcreate',
                'value' => 'C'
            ],
            [
                'label' => 'fdisk',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-05',
        'question' => '若系統的 umask 設定為 033 ， 某個使用者想要把檔案/etc/files 的權限改成 444，請問下列敘述哪些正確?(複選)',
        'options' => [
            [
                'label' => 'chmod 444 /etc/files',
                'value' => 'A'
            ],
            [
                'label' => 'chmod ugo+r /etc/files',
                'value' => 'B'
            ],
            [
                'label' => 'chmod a=r /etc/files',
                'value' => 'C'
            ],
            [
                'label' => 'chmod u-w go-rw+r /etc/files',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '3-06',
        'question' => '若我們知道 Linux 系統中，有⼀個磁碟編號是/dev/sdb5，我們可以推論出下列哪⼀項結論?',
        'options' => [
            [
                'label' => '這台電腦有五台硬碟',
                'value' => 'A'
            ],
            [
                'label' => '這台電腦裝有 SCSI 介面的硬碟',
                'value' => 'B'
            ],
            [
                'label' => '這台電腦至少有兩台硬碟',
                'value' => 'C'
            ],
            [
                'label' => '這台電腦只有 IDE 介面的硬碟',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-07',
        'question' => '在 fdisk 指令中，下列哪⼀個鍵用來建立新分割區?',
        'options' => [
            [
                'label' => '[c]鍵',
                'value' => 'A'
            ],
            [
                'label' => '[n]鍵',
                'value' => 'B'
            ],
            [
                'label' => '[m]鍵',
                'value' => 'C'
            ],
            [
                'label' => '[t]鍵',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-08',
        'question' => '在 fdisk 指令中，下列哪⼀個鍵用來指定分割區系統的 ID?',
        'options' => [
            [
                'label' => '[t]鍵',
                'value' => 'A'
            ],
            [
                'label' => '[f]鍵',
                'value' => 'B'
            ],
            [
                'label' => '[i]鍵',
                'value' => 'C'
            ],
            [
                'label' => '[p]鍵',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-09',
        'question' => '關於設定檔案具 SetUID 權限的指令，下列哪些正確?(複選)',
        'options' => [
            [
                'label' => 'chmod 4755 /tmp/test',
                'value' => 'A'
            ],
            [
                'label' => 'chmod 1755 /tmp/test',
                'value' => 'B'
            ],
            [
                'label' => 'chmod u+s /tmp/test',
                'value' => 'C'
            ],
            [
                'label' => 'chmod g+s /tmp/test',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '3-10',
        'question' => '關於設定⽬錄具 Sticky Bit 權限的指令，下列哪些正確?(複選)',
        'options' => [
            [
                'label' => 'chmod 4755 /public',
                'value' => 'A'
            ],
            [
                'label' => 'chmod 1755 /public',
                'value' => 'B'
            ],
            [
                'label' => 'chmod u+t /public',
                'value' => 'C'
            ],
            [
                'label' => 'chmod o+t /public',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '3-11',
        'question' => '⼀般 User 權限的 umask 預設值為下列哪⼀項?',
        'options' => [
            [
                'label' => '022',
                'value' => 'A'
            ],
            [
                'label' => '002',
                'value' => 'B'
            ],
            [
                'label' => '222',
                'value' => 'C'
            ],
            [
                'label' => '020',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-12',
        'question' => '請問檔案系統中的 i-node，記錄檔案的資訊有下列哪些?(複選)',
        'options' => [
            [
                'label' => '檔案大小',
                'value' => 'A'
            ],
            [
                'label' => '擁有使用者及群組',
                'value' => 'B'
            ],
            [
                'label' => '檔案名稱',
                'value' => 'C'
            ],
            [
                'label' => 'Data Block',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '3-13',
        'question' => '製作磁碟配額時，設定好/etc/fstab 中的/home 為 usrquota，下列哪⼀項指令可以重新掛載/home 分割區而不用重新開機?',
        'options' => [
            [
                'label' => 'remount /home',
                'value' => 'A'
            ],
            [
                'label' => 'mount –r remount /home',
                'value' => 'B'
            ],
            [
                'label' => 'mount –o remount /home',
                'value' => 'C'
            ],
            [
                'label' => 'remount mount /home',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-14',
        'question' => '關於檔案系統使用配額的描述，下列哪⼀項錯誤?',
        'options' => [
            [
                'label' => '使用者絕對不可能存放超過 quota hard limit 所設定的限制',
                'value' => 'A'
            ],
            [
                'label' => '只有系統管理者才有權限設定其他使用者的 quota 容量',
                'value' => 'B'
            ],
            [
                'label' => '使用者可以透過 quota -v 指令查看自己⽬前使用量',
                'value' => 'C'
            ],
            [
                'label' => 'quota 僅能針對使用者的檔案容量大小做限制，而無法限制檔案數⽬',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-15',
        'question' => '在 Linux 安裝時，下列哪⼀項⽬錄不會獨立使用某⼀磁碟分割?',
        'options' => [
            [
                'label' => '/usr',
                'value' => 'A'
            ],
            [
                'label' => '/var',
                'value' => 'B'
            ],
            [
                'label' => '/proc',
                'value' => 'C'
            ],
            [
                'label' => '/usr/local',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-16',
        'question' => '關於 Linux Swap 分割的敘述，下列哪⼀項錯誤?Swap 容量',
        'options' => [
            [
                'label' => 'Swap 分割容量之建議值為「大於」系統實體記憶體容量',
                'value' => 'A'
            ],
            [
                'label' => '當系統 Swap 空間之使用率提高時，系統效能相對應地降低',
                'value' => 'B'
            ],
            [
                'label' => '當系統 Swap 空間不足時，可以透過增加新 Swap 分割的方式，提升總',
                'value' => 'C'
            ],
            [
                'label' => '若系統沒有 Swap 分割，則無法順利啟動',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-17',
        'question' => '非日誌檔案系統 EXT2 與日誌檔案系統 EXT3 比較，下列哪⼀項不是日誌檔案系統的優點?',
        'options' => [
            [
                'label' => '完整記錄所有磁碟的寫入動作',
                'value' => 'A'
            ],
            [
                'label' => '節省開機 fsck 的時間',
                'value' => 'B'
            ],
            [
                'label' => '降低因為不正常關機所造成之檔案損毀機率',
                'value' => 'C'
            ],
            [
                'label' => '增加檔案寫入磁碟之速度',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-18',
        'question' => '⽀援 Journaling 特性的檔案系統有下列哪些?(複選)',
        'options' => [
            [
                'label' => 'EXT2',
                'value' => 'A'
            ],
            [
                'label' => 'EXT3',
                'value' => 'B'
            ],
            [
                'label' => 'ReiserFS',
                'value' => 'C'
            ],
            [
                'label' => 'FAT32',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '3-19',
        'question' => '下列哪項指令可以啓動並增加⼀組新的 SWAP 分割?',
        'options' => [
            [
                'label' => 'mkswap /dev/<partition>',
                'value' => 'A'
            ],
            [
                'label' => 'swapon /dev/<partition>',
                'value' => 'B'
            ],
            [
                'label' => 'addswap /dev/<partition>',
                'value' => 'C'
            ],
            [
                'label' => 'enable swap /dev/<partition>',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-20',
        'question' => '下列那⼀項 mke2fs 指令選項，可以建立 EXT3 檔案系統?',
        'options' => [
            [
                'label' => '-j',
                'value' => 'A'
            ],
            [
                'label' => '-3',
                'value' => 'B'
            ],
            [
                'label' => '–ext3',
                'value' => 'C'
            ],
            [
                'label' => '–t',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-21',
        'question' => '關於檔案系統預留空間的敘述，下列哪⼀項錯誤?mke2fs 指令，即可線上調整',
        'options' => [
            [
                'label' => '預留空間的主要精神為避免當檔案系統滿載時，影響系統正常運作',
                'value' => 'A'
            ],
            [
                'label' => '預留空間僅有系統管理者才有權力寫入',
                'value' => 'B'
            ],
            [
                'label' => '當執行 mke2fs 格式化檔案系統時，系統即自動預留某⼀百分比之空間',
                'value' => 'C'
            ],
            [
                'label' => '若希望改變預留空間的大小，無須重新格式化檔案系統，僅需到執行',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-22',
        'question' => '在 EXT3 檔案系統環境下，使用者無法寫入新檔案於自己的$HOME ⽬錄時，發生原因不可能為下列哪⼀項?',
        'options' => [
            [
                'label' => '該硬碟空間已滿',
                'value' => 'A'
            ],
            [
                'label' => '該分割區空間已滿',
                'value' => 'B'
            ],
            [
                'label' => '該分割區之 FAT 空間已滿',
                'value' => 'C'
            ],
            [
                'label' => '該使用者使用量已經超過個人 Quota 限制',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-23',
        'question' => '在 Linux 的檔案系統上，下列哪⼀項包含了許多 Pointer，分別記錄了檔案系統上資料真正存放的位置?',
        'options' => [
            [
                'label' => 'superblock',
                'value' => 'A'
            ],
            [
                'label' => 'i-node',
                'value' => 'B'
            ],
            [
                'label' => 'sector',
                'value' => 'C'
            ],
            [
                'label' => 'pointerlink',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-24',
        'question' => '如果 EXT2 或 EXT3 檔案系統的主要 Superblock 資訊損毀，我們可以藉由下列哪⼀項 fsck 或 e2fsck 指令選項，嘗試透過其他 Superblock的資訊修復檔案系統?',
        'options' => [
            [
                'label' => '-a',
                'value' => 'A'
            ],
            [
                'label' => '-b',
                'value' => 'B'
            ],
            [
                'label' => '-c',
                'value' => 'C'
            ],
            [
                'label' => '-A',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-25',
        'question' => '假設某⼀使用者的 Hard Quota12k，⽬前已用掉 8k，此時再寫入⼀個5k 的新檔，則下列哪⼀項敘述正確?誤資訊誤資訊外，檔案接著會被刪除',
        'options' => [
            [
                'label' => '檔案可以建立，但卻有 1k 資料遺失掉，同時會得到⼀個超出配額的錯',
                'value' => 'A'
            ],
            [
                'label' => '檔案可以完整建立，不會有任何資料遺失，但會得到⼀個超出配額的錯',
                'value' => 'B'
            ],
            [
                'label' => '檔案不會建立，但會得到⼀個超出配額的錯誤資訊',
                'value' => 'C'
            ],
            [
                'label' => '檔案會先被建立，但因為超出配額，除了得到⼀個超出配額的錯誤資訊',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-26',
        'question' => '下列哪⼀項⽬錄其内容在關機後是不會保存的?',
        'options' => [
            [
                'label' => '/tmp',
                'value' => 'A'
            ],
            [
                'label' => '/var',
                'value' => 'B'
            ],
            [
                'label' => '/var/tmp',
                'value' => 'C'
            ],
            [
                'label' => '/proc',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-27',
        'question' => '假設當前⽬錄下分別有 d1 與 d2 這兩個⽬錄，同時 d1 下有⼀份 f1 的檔案。請問要成功執行 cp d1/f1 d2 這個命令所需的最小權限是下列哪⼀項?',
        'options' => [
            [
                'label' => '對 d1 擁有 rx，對 d1/f1 擁有 rw，對 d2 擁有 rwx',
                'value' => 'A'
            ],
            [
                'label' => '對 d1 擁有 rx，對 d1/f1 擁有 r，對 d2 擁有 rwx',
                'value' => 'B'
            ],
            [
                'label' => '對 d1 擁有 x，對 d1/f1 擁有 r，對 d2 擁有 wx',
                'value' => 'C'
            ],
            [
                'label' => '對 d1 擁有 x，對 d1/f1 擁有 r，對 d2 擁有 rwx',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-28',
        'question' => '對⼀個存放大量小型檔案的檔案系統來說 ， 在進行 mkfs 格式化時 ，  下列哪⼀項建議最為合理?',
        'options' => [
            [
                'label' => '將 block-size 降低，及將 i-node 數量降低',
                'value' => 'A'
            ],
            [
                'label' => '將 block-size 提高，及將 i-node 數量降低',
                'value' => 'B'
            ],
            [
                'label' => '將 block-size 降低，及將 i-node 數量提高',
                'value' => 'C'
            ],
            [
                'label' => '將 block-size 降低，及將 i-node 數量提高',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-29',
        'question' => '關於磁碟配額的 grace-time 敘述，下列哪些正確?(複選)檔案，但無論如何，不能超過硬限制(Hard Limit)平之下，grace-time 就會自動取消倒數，並會被還原為原始值',
        'options' => [
            [
                'label' => '倘若 grace-time ⼀經觸發，只能等到倒數完畢後才能解除',
                'value' => 'A'
            ],
            [
                'label' => '管理員可以針對不同的使用者設定不同的 grace-time',
                'value' => 'B'
            ],
            [
                'label' => '當軟限制(Soft Limit)超過後，在 grace-time 期限内，仍可繼續創建新',
                'value' => 'C'
            ],
            [
                'label' => '當 grace-time 已進入倒數階段，只要使用量降到軟限制(Soft Limit)水',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'CD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '3-30',
        'question' => '在預設情況下，下列哪些⽬錄是不會出現在普通使用者的 Path 環境變數之中?(複選)',
        'options' => [
            [
                'label' => '/sbin',
                'value' => 'A'
            ],
            [
                'label' => '/usr/local/bin',
                'value' => 'B'
            ],
            [
                'label' => '/usr/sbin',
                'value' => 'C'
            ],
            [
                'label' => '/usr/bin',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '3-31',
        'question' => '請問 Linux Swap 使用的 Partition ID 是下列哪⼀項?',
        'options' => [
            [
                'label' => '83',
                'value' => 'A'
            ],
            [
                'label' => '81',
                'value' => 'B'
            ],
            [
                'label' => '8e',
                'value' => 'C'
            ],
            [
                'label' => '82',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-32',
        'question' => '若⽬前使用者的 umask 設定為 022，則這個使用者建立⽬錄的權限應為下列哪⼀項?',
        'options' => [
            [
                'label' => '755',
                'value' => 'A'
            ],
            [
                'label' => '644',
                'value' => 'B'
            ],
            [
                'label' => '722',
                'value' => 'C'
            ],
            [
                'label' => '622',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-33',
        'question' => '若要把某個檔案的權限改成 Owner 僅可讀寫其餘僅可讀，應執行下列哪⼀項指令?',
        'options' => [
            [
                'label' => 'chmod 755',
                'value' => 'A'
            ],
            [
                'label' => 'chmod 644',
                'value' => 'B'
            ],
            [
                'label' => 'chmod 722',
                'value' => 'C'
            ],
            [
                'label' => 'chmod 622',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-34',
        'question' => '若某個使用者執行了指令 chmod g+w ， 把某個檔案的權限改成 664，則下列哪⼀項敘述正確?',
        'options' => [
            [
                'label' => '⽬前使用者的 umask 設定為 002',
                'value' => 'A'
            ],
            [
                'label' => '⽬前使用者的 umask 設定為 022',
                'value' => 'B'
            ],
            [
                'label' => '⽬前使用者的 umask 設定為 004',
                'value' => 'C'
            ],
            [
                'label' => '⽬前使用者的 umask 設定為 044',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-35',
        'question' => '若某個⽬錄的權限為 766，若要改為 Owner 可讀寫、執行，且其餘可讀，可使用下列哪些指令達成⽬的?(複選)',
        'options' => [
            [
                'label' => 'chmod 744',
                'value' => 'A'
            ],
            [
                'label' => 'chmod go-w',
                'value' => 'B'
            ],
            [
                'label' => 'chmod 722',
                'value' => 'C'
            ],
            [
                'label' => 'chmod o+x ug-w',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AB',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '3-36',
        'question' => '⼀般使用者家⽬錄預設是在下哪⼀項⽬錄下?',
        'options' => [
            [
                'label' => '/usr',
                'value' => 'A'
            ],
            [
                'label' => '/var',
                'value' => 'B'
            ],
            [
                'label' => '/home',
                'value' => 'C'
            ],
            [
                'label' => '/root',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-37',
        'question' => '常用的執行檔如 ls、my、rm、tar，是放置在下列哪⼀項⽬錄?',
        'options' => [
            [
                'label' => '/bin',
                'value' => 'A'
            ],
            [
                'label' => '/lib',
                'value' => 'B'
            ],
            [
                'label' => '/proc',
                'value' => 'C'
            ],
            [
                'label' => '/usr/lib',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '3-38',
        'question' => '欲查詢磁碟使用狀況，可使用下列哪些命令?(複選)',
        'options' => [
            [
                'label' => 'df',
                'value' => 'A'
            ],
            [
                'label' => 'du',
                'value' => 'B'
            ],
            [
                'label' => 'dl',
                'value' => 'C'
            ],
            [
                'label' => 'freedisk',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AB',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '3-39',
        'question' => '請問下列哪些命令可用於備份系統或檔案?(複選)',
        'options' => [
            [
                'label' => 'tape',
                'value' => 'A'
            ],
            [
                'label' => 'tar',
                'value' => 'B'
            ],
            [
                'label' => 'dump',
                'value' => 'C'
            ],
            [
                'label' => 'cpio',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BCD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '3-40',
        'question' => '如附圖所示，有⼀ Linux 系統的根⽬錄是掛載於/dev/hdal，/home 掛載於/dev/hda2，使用者 foo 的家⽬錄為/home/foo，而且使用者 foo已被系統 quota 設定最多 500MB 的磁碟使用量 ， /etc/fstab 的內容如附圖所示，請問下列哪⼀項敘述正確?//dev/hdal ext3 default， rw 1 1/home/dev/hda2 ext3 default，usrquota，grpquota 1 1',
        'options' => [
            [
                'label' => '使用者 foo 可於家⽬錄中新建⼀個 510MB 的檔案',
                'value' => 'A'
            ],
            [
                'label' => '使用者 foo 可於/tmp 中新建⼀個 510MB 的檔案',
                'value' => 'B'
            ],
            [
                'label' => '在此系統中屬於使用者 foo 的檔案總容量為 500MB',
                'value' => 'C'
            ],
            [
                'label' => '使用者 foo 最多只可以新建 1，000，000 個檔案',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-01',
        'question' => '下列哪⼀項指令可以查看背景執行的第 n 個工作並將其刪除?',
        'options' => [
            [
                'label' => 'jobs; kill %n',
                'value' => 'A'
            ],
            [
                'label' => 'jobs; kill $n',
                'value' => 'B'
            ],
            [
                'label' => 'jobs， stop %n',
                'value' => 'C'
            ],
            [
                'label' => 'jobs; stop $n',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-02',
        'question' => '下列哪⼀項指令無法查看使用者 wayne 的執行程序?',
        'options' => [
            [
                'label' => 'ps -u wayne',
                'value' => 'A'
            ],
            [
                'label' => 'ps ef',
                'value' => 'B'
            ],
            [
                'label' => 'ps wayne',
                'value' => 'C'
            ],
            [
                'label' => 'ps U wayne',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-03',
        'question' => '要變更執行指令時所搜尋的系統路徑順序 ， 應該修改的系統變數為下列哪⼀項?',
        'options' => [
            [
                'label' => '$PS1',
                'value' => 'A'
            ],
            [
                'label' => '$PATH',
                'value' => 'B'
            ],
            [
                'label' => '$SHELL',
                'value' => 'C'
            ],
            [
                'label' => '$FIND',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-04',
        'question' => '關於 Linux 的程序管理的敘述，下列哪些正確?(複選)序，設定程序執行的時間',
        'options' => [
            [
                'label' => '幕後執行，可以在指令列尾端加上&字元',
                'value' => 'A'
            ],
            [
                'label' => 'nice 指令可以更改程序的優先權，而優先權的範圍是從-25~24',
                'value' => 'B'
            ],
            [
                'label' => 'nice 指令的預設 nice number 為 10',
                'value' => 'C'
            ],
            [
                'label' => 'Linux 提供了兩種排程指令 at 與 cron，可以運用這兩個指令來安排程',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ACD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '4-05',
        'question' => '下列哪⼀項指令可以樹狀圖的方式顯示執行程序 ， 並顯示每個程序識別碼針對識別碼加以排序?',
        'options' => [
            [
                'label' => 'pstree-a',
                'value' => 'A'
            ],
            [
                'label' => 'pstree-h',
                'value' => 'B'
            ],
            [
                'label' => 'pstree -p –n',
                'value' => 'C'
            ],
            [
                'label' => 'pstree –n',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-06',
        'question' => '欲使用 kill 指令重新啟動該程序，下列哪些是正確的指令?(複選)',
        'options' => [
            [
                'label' => 'kill -1 pid',
                'value' => 'A'
            ],
            [
                'label' => 'kill -9 pid',
                'value' => 'B'
            ],
            [
                'label' => 'kill -HUP pid',
                'value' => 'C'
            ],
            [
                'label' => 'kill -15 pid',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '4-07',
        'question' => '下列哪⼀項指令可以顯示背景執行工作並列出工程執行的 ID?',
        'options' => [
            [
                'label' => 'jobs -t',
                'value' => 'A'
            ],
            [
                'label' => 'jobs -l',
                'value' => 'B'
            ],
            [
                'label' => 'jobs -i',
                'value' => 'C'
            ],
            [
                'label' => 'jobs -s',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-08',
        'question' => '關於 nohup 指令的敘述，下列哪⼀項正確?',
        'options' => [
            [
                'label' => '讓程序執行於背景中',
                'value' => 'A'
            ],
            [
                'label' => ')使用者登出系統後，繼續於背景中執行該程序',
                'value' => 'B'
            ],
            [
                'label' => '使用者登出系統後，結束執行該程序',
                'value' => 'C'
            ],
            [
                'label' => '使用者登出系統後，該執行程序會暫停',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-09',
        'question' => '想要結束自己的某⼀程序(PID 為 12121) ， 但是連續執行了幾次指令 kill12121 都無法如願終止該程序 ， 應使用下列哪⼀項指令解決此⼀問題?',
        'options' => [
            [
                'label' => 'kill -6 12121',
                'value' => 'A'
            ],
            [
                'label' => 'kill -7 12121',
                'value' => 'B'
            ],
            [
                'label' => 'kill -8 12121',
                'value' => 'C'
            ],
            [
                'label' => 'kill -9 12121',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-10',
        'question' => '若想將某⼀正在執行的程序放到背景執行 ， 然而由於該程序⽬前為前景執行，因此使用者並無法取得 Shell 控制權。下列哪⼀項指令可以幫我們達到⽬的?',
        'options' => [
            [
                'label' => 'ctrl-c，background',
                'value' => 'A'
            ],
            [
                'label' => 'ctrl-c，bg',
                'value' => 'B'
            ],
            [
                'label' => 'ctrl-z，background',
                'value' => 'C'
            ],
            [
                'label' => 'ctrl-z，bg',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-11',
        'question' => '下列⼀項指令可以查詢⽬前正在背景執行的程序狀態?',
        'options' => [
            [
                'label' => 'jobs -1',
                'value' => 'A'
            ],
            [
                'label' => 'backjobs -1',
                'value' => 'B'
            ],
            [
                'label' => 'ps -backjobs',
                'value' => 'C'
            ],
            [
                'label' => 'ps -background',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-12',
        'question' => '下列哪⼀項指令可以幫助系統管理者即時監控⽬前系統內所有程度的執行狀態，包括 CPU 與記憶體的使用量等?',
        'options' => [
            [
                'label' => 'top',
                'value' => 'A'
            ],
            [
                'label' => 'ps -aux',
                'value' => 'B'
            ],
            [
                'label' => 'ps -der',
                'value' => 'C'
            ],
            [
                'label' => 'jobs -1',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-13',
        'question' => '關於 kill 指令的敘述，下列哪些正確?(複選)signal value 1 給 PID 11251',
        'options' => [
            [
                'label' => 'kill -9 11251 代表傳送 signal value 9 (SIGKill signal)給 PI D 11251',
                'value' => 'A'
            ],
            [
                'label' => '如果沒有特別指定 signal value，當執行 kll 1251 時，系統會預設傳送',
                'value' => 'B'
            ],
            [
                'label' => '所有 signal 的定義皆可透過 man Signal 查閱',
                'value' => 'C'
            ],
            [
                'label' => 'kill 指令的真正含意為傳送 signal 給某⼀正在執行的程序',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ACD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '4-14',
        'question' => '可以藉由 ps 指令顯示的程序資訊有下列哪些?(複選)',
        'options' => [
            [
                'label' => '程序執行者',
                'value' => 'A'
            ],
            [
                'label' => '程序編號 PID',
                'value' => 'B'
            ],
            [
                'label' => '程序⽬前所佔用的 CPU 時間(百分比)',
                'value' => 'C'
            ],
            [
                'label' => '程序⽬前所佔用的記憶體空間',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABCD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '4-15',
        'question' => '關於系統程序的敘述，下列哪⼀項錯誤?',
        'options' => [
            [
                'label' => '每⼀⽀正在執行的程式，對系統而⾔都是⼀⽀程序',
                'value' => 'A'
            ],
            [
                'label' => '系統會針對每⼀⽀程序予以編號，稱為 PID',
                'value' => 'B'
            ],
            [
                'label' => '系統內所有正在執行的相同程式，都會被賦予相同的 PID',
                'value' => 'C'
            ],
            [
                'label' => '系統開機時所執行的所有 Daemon 程式，也都會被賦予 PID',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-16',
        'question' => '關於系統啟動 systemd 程式的敘述，下列哪些正確?(複選)方式automount pionts 將不再使用/etc/fstab 作為掛載的方式',
        'options' => [
            [
                'label' => 'systemd 使用 socket 和 D-Bus 來啟動服務',
                'value' => 'A'
            ],
            [
                'label' => '在 Fedora 15 之後 ， 以 systermid 替代 Upstart 作為系統預設的啟動',
                'value' => 'B'
            ],
            [
                'label' => 'systemd 程式監控所有掛載點，⽀援 maintains mount and',
                'value' => 'C'
            ],
            [
                'label' => '控制 systemd 的設定檔為/etc/system.conf',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '4-17',
        'question' => '下列哪⼀行指令可將系統最新的兩秒程序資訊存在檔案 proc.txt 中 ， 並且⼀ CPU 附載量為排序依據',
        'options' => [
            [
                'label' => 'ps aux | awk ‘$3’ | sort -n ； sleep 2 > proc.txt',
                'value' => 'A'
            ],
            [
                'label' => 'top -d2 -n1 > proc.txt',
                'value' => 'B'
            ],
            [
                'label' => 'top –d2 –nl > proc.txt',
                'value' => 'C'
            ],
            [
                'label' => 'top -aux -d2 -n1 > proc.txt',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-18',
        'question' => '關於程序優先權的敘述，下列哪些正確?(複選)安排',
        'options' => [
            [
                'label' => 'NI 值越高優先權越低，反之則越高',
                'value' => 'A'
            ],
            [
                'label' => 'PRI 值由 Kernel 動態調整，但 NI 值則需要使用者或管理員調整',
                'value' => 'B'
            ],
            [
                'label' => 'NI 的取值範圍是-19 到 20 之間，若不指定，預設為 0',
                'value' => 'C'
            ],
            [
                'label' => '管理員可以用⼀個單⼀的指令 ， 將某⼀使用者所有程序之 NI 值作重新的',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '4-19',
        'question' => '⽬前運行於前境的程序名為 prog，其 PID 為 1234，不接受 int、quit與 stop 信號，但可接受 tern 信號，下列哪⼀項是最佳的結束方式?',
        'options' => [
            [
                'label' => '先按[Ctrl]+[/]，然後鍵入 kill -9 1234',
                'value' => 'A'
            ],
            [
                'label' => '開啟另⼀個 console，然後鍵入 killall 1234',
                'value' => 'B'
            ],
            [
                'label' => '開啟另⼀個 console，然後鍵入 killall prog',
                'value' => 'C'
            ],
            [
                'label' => '先用 su 切換為管理員，然後鍵 kill -9 prog',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-20',
        'question' => '某⼀使用者在早上時間安排了⼀個 at 排程工作:at 2pm，其內容是echo meeting。但是時間到了卻沒在螢幕上看到這個提示，此問題的原因是下列哪⼀項?',
        'options' => [
            [
                'label' => ')因為結果存到其家⽬錄的 at.out 檔案中而非送輸至螢幕',
                'value' => 'A'
            ],
            [
                'label' => '因為結果會送到其信箱而非輸出至螢幕',
                'value' => 'B'
            ],
            [
                'label' => '因為 at 的結果只會輸出至管理員的螢幕',
                'value' => 'C'
            ],
            [
                'label' => 'at 指令格式是不正確的',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-21',
        'question' => '當使用者下達 at 指令後，會將工作排程寫入下列哪⼀項⽬錄?',
        'options' => [
            [
                'label' => '/etc/at.allow',
                'value' => 'A'
            ],
            [
                'label' => '/etc/rc.d/init.d/atd',
                'value' => 'B'
            ],
            [
                'label' => '/var/spool/at',
                'value' => 'C'
            ],
            [
                'label' => '/var/spool/cron',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-22',
        'question' => '若使用者要編輯自己的 crontab 指令，則應使用下列哪⼀個指令?',
        'options' => [
            [
                'label' => 'crontab -e',
                'value' => 'A'
            ],
            [
                'label' => 'crontab -l',
                'value' => 'B'
            ],
            [
                'label' => 'crontab -u',
                'value' => 'C'
            ],
            [
                'label' => 'crontab -r',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-23',
        'question' => '若 crontab 其中⼀行内容為 5 3 * * 0 /home/test/test.sh， 則該排程會在下列哪⼀項的時間執行?',
        'options' => [
            [
                'label' => '每星期五的晚上 12:03',
                'value' => 'A'
            ],
            [
                'label' => '每星期日的早上 03:05',
                'value' => 'B'
            ],
            [
                'label' => '每星期三的晚上 12:05',
                'value' => 'C'
            ],
            [
                'label' => '每天的早上 05:03',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-24',
        'question' => '請問如果要讓⼀個 Shell Script 收到 signal 9 跟 15 時輸出"pleasewait"，在此 Shell Script 需加入下列哪⼀項指令?',
        'options' => [
            [
                'label' => 'trap 9 15 "echo please wait"',
                'value' => 'A'
            ],
            [
                'label' => 'trap "echo please wait" 9 15',
                'value' => 'B'
            ],
            [
                'label' => 'kill 9 15 "echo please wait"',
                'value' => 'C'
            ],
            [
                'label' => 'kill "echo please wait" 9 15',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-25',
        'question' => '使用者 foo 想於每個禮拜天的上午⼀點到三點和下午九點到⼗⼀點的期間，每 20 分鐘執行程式 bar，請問下列哪些為正確的 cron 設定? (複選)',
        'options' => [
            [
                'label' => '0，20，40 1-3，21-23 * * 7 bar',
                'value' => 'A'
            ],
            [
                'label' => '0，20，40 1-3；21-23 * * 7 bar',
                'value' => 'B'
            ],
            [
                'label' => '*/20 1-3，21-23 * * 0 bar',
                'value' => 'C'
            ],
            [
                'label' => '0，20，40 1-3:21-23 * * 7 bar',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '4-26',
        'question' => '關於 ps 和 ps -ef 差異的敘述，下列哪⼀項正確?程序程序',
        'options' => [
            [
                'label' => 'ps 只顯示其⺟程序及其相關子程序的簡單訊息，ps -ef 則顯示系統所有',
                'value' => 'A'
            ],
            [
                'label' => 'ps -ef 只顯示其⺟程序及其相關子程序的簡單訊息，ps 則顯示系統所有',
                'value' => 'B'
            ],
            [
                'label' => 'ps 和 ps -ef 的輸出是⼀樣的',
                'value' => 'C'
            ],
            [
                'label' => 'ps 根本沒有-ef 的選項',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-27',
        'question' => '使用者 Foo 想將程序編號 168 中要先權 0 改為-10，請問下列哪⼀項敘述正確?',
        'options' => [
            [
                'label' => '鍵入 nice -p 168 -n -10',
                'value' => 'A'
            ],
            [
                'label' => '鍵入 renice -10 168',
                'value' => 'B'
            ],
            [
                'label' => '使用者 foo 不能完成該變更',
                'value' => 'C'
            ],
            [
                'label' => '鍵入 renice -n -10 168',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-28',
        'question' => '下列哪⼀項指令可以把⼀個正在執行的程序立即移除?',
        'options' => [
            [
                'label' => 'kill -2',
                'value' => 'A'
            ],
            [
                'label' => 'kill -9',
                'value' => 'B'
            ],
            [
                'label' => 'kill –HUP',
                'value' => 'C'
            ],
            [
                'label' => 'kill -15',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '4-29',
        'question' => '下列哪些指令可以監控⼀個程序的詳細動作?(複選)',
        'options' => [
            [
                'label' => 'top',
                'value' => 'A'
            ],
            [
                'label' => 'ps',
                'value' => 'B'
            ],
            [
                'label' => 'strace',
                'value' => 'C'
            ],
            [
                'label' => 'gdb',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AB',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '4-30',
        'question' => '請問程序的資料會在下列哪⼀項⽬錄下?',
        'options' => [
            [
                'label' => '/usr',
                'value' => 'A'
            ],
            [
                'label' => '/var',
                'value' => 'B'
            ],
            [
                'label' => '/proc',
                'value' => 'C'
            ],
            [
                'label' => '/lib',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-01',
        'question' => '請參閱附圖作答。(複選)甲公司會定期將檔案伺服器的資料備份到磁帶當中。備份的程度下所示:1.在每個月底當天的 23:00 進行完整備份2.在每個星期六的 23:00 備份自上次完整備份後的異動資料3.在每天晚上 23:00 備份從昨天之後的異動資料接著將個別的備份資料保存在磁带當中，設定保存時間為二個月， 星期天由於沒有業務要進行，所以並不進行備份。5 月 12 日(星期四)上班時，網管人員發現伺服器當機了。由於前⼀天晚上的備份是成功的，因此可以判定是在備份後才發生當機。那麼下列哪些是正確的復原動作?料磁帶 3 捲復原回去',
        'options' => [
            [
                'label' => '把上個月所進行備份的磁帶先復原回去',
                'value' => 'A'
            ],
            [
                'label' => '把 5 月 7 日(星期六)所進行之完整備份後異動資料的備份磁帶再倒回去',
                'value' => 'B'
            ],
            [
                'label' => '把 5 月 9 日(星期⼀)到 5 月 11 日(星期三)與前⼀日比較有異動的備份資',
                'value' => 'C'
            ],
            [
                'label' => '至少要 5 捲的磁帶才能復原的回來',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABCD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '5-02',
        'question' => '下列哪些方式可以例行檢查主記憶體使用狀況?(複選)',
        'options' => [
            [
                'label' => 'df -h',
                'value' => 'A'
            ],
            [
                'label' => 'free',
                'value' => 'B'
            ],
            [
                'label' => 'top',
                'value' => 'C'
            ],
            [
                'label' => 'cat /proc/meminfo',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BCD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '5-03',
        'question' => '下列哪些因素會造成原本正常的 X Window 無法啟動?(複選)',
        'options' => [
            [
                'label' => '網路驅動不正常',
                'value' => 'A'
            ],
            [
                'label' => '滑鼠驅動不正常',
                'value' => 'B'
            ],
            [
                'label' => 'XFS (X font Server)沒有啟動',
                'value' => 'C'
            ],
            [
                'label' => 'TCP/IP 中的 Gateway 沒有設定',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '5-04',
        'question' => '用來設定及管理 log 組態檔是下列哪⼀項檔案?',
        'options' => [
            [
                'label' => '/var/log/dmesg',
                'value' => 'A'
            ],
            [
                'label' => '/etc/rsyslog.conf',
                'value' => 'B'
            ],
            [
                'label' => 'etc/log.d/conf/logfiles/messages.conf',
                'value' => 'C'
            ],
            [
                'label' => '/var/messages',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-05',
        'question' => '在/etc/rsyslog.conf 管理 Log 層級中，emerg 屬下列哪⼀層級?',
        'options' => [
            [
                'label' => '紀錄層級，主要以服務運作為紀錄為主層級',
                'value' => 'A'
            ],
            [
                'label' => '警告層級，服務提出警告或是錯誤訊息',
                'value' => 'B'
            ],
            [
                'label' => '嚴重層級，系統出現嚴重錯誤，需要馬上偵錯',
                'value' => 'C'
            ],
            [
                'label' => '不屬任何層級',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-06',
        'question' => '在 crontab 中撰寫下列哪一項指令，就可以在每個星期五早上 11:30 系統自動打包備份 /data 資料夾 ?',
        'options' => [
            [
                'label' => '* 30 11 * 5 /bin/tar czvf data.tar.gz /data',
                'value' => 'A'
            ],
            [
                'label' => '30 11 * * 5 /bin/tar czvf data.tar.gz /data',
                'value' => 'B'
            ],
            [
                'label' => '30 11 * * 5 tar czvf data.tar.gz /data',
                'value' => 'C'
            ],
            [
                'label' => '* 30 11 * 5 tar czvf data.tar.gz /data',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-07',
        'question' => '下列哪⼀項指令可以用來查驗本機網路卡的 MAC Address?',
        'options' => [
            [
                'label' => 'ping 127.0.0.1',
                'value' => 'A'
            ],
            [
                'label' => 'ifconfig',
                'value' => 'B'
            ],
            [
                'label' => 'route',
                'value' => 'C'
            ],
            [
                'label' => 'traceroute',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-08',
        'question' => '請問 touch /etc/nologin 有下列哪一項作用 ?',
        'options' => [
            [
                'label' => '讓所有 user 包括 root 皆無法登入',
                'value' => 'A'
            ],
            [
                'label' => '只有 root 不可以登入，其它 user 可正常登入',
                'value' => 'B'
            ],
            [
                'label' => '只有 root 可以登入，其它 user 不可登入',
                'value' => 'C'
            ],
            [
                'label' => '沒有影響登入作用',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-09',
        'question' => '下列⼀項指令可以用來查驗本機與其它電腦的 TCP 連線狀態?',
        'options' => [
            [
                'label' => 'netstat -t1',
                'value' => 'A'
            ],
            [
                'label' => 'ping',
                'value' => 'B'
            ],
            [
                'label' => 'netstat -nt',
                'value' => 'C'
            ],
            [
                'label' => 'traceroute',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-10',
        'question' => 'TCP/IP 設定中，IP、Netmask、Gateway IP 都設定正確，唯獨 DNS I P設定錯誤，請問會有下列哪⼀項影響?',
        'options' => [
            [
                'label' => 'TCP/IP 協定無法啟動',
                'value' => 'A'
            ],
            [
                'label' => 'IP 封包無法至 Internet 上',
                'value' => 'B'
            ],
            [
                'label' => '網頁瀏覽時無法使用網址，但用 IP 可以瀏覽',
                'value' => 'C'
            ],
            [
                'label' => '沒有任何影響',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-11',
        'question' => '使用 last 指令可以查詢近期所有登入系統使用者的列表，事實上 last是參考下列哪⼀項檔案?',
        'options' => [
            [
                'label' => '/var/log/dmesg',
                'value' => 'A'
            ],
            [
                'label' => '/var/log/message',
                'value' => 'B'
            ],
            [
                'label' => '/var/log/syslog',
                'value' => 'C'
            ],
            [
                'label' => '/var/log/wtmp',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-12',
        'question' => '下列哪⼀項指令，有助於在既有的 terminal 上，持續觀察某⼀系統記的即時變化?',
        'options' => [
            [
                'label' => 'cat /var/log/messages',
                'value' => 'A'
            ],
            [
                'label' => 'more /var/log/messages',
                'value' => 'B'
            ],
            [
                'label' => 'head -f /var/log/messages',
                'value' => 'C'
            ],
            [
                'label' => 'tail –f /var/log/messages',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-13',
        'question' => '下列哪⼀項指令最適合針對某⼀ Partition 做備份?',
        'options' => [
            [
                'label' => 'archive',
                'value' => 'A'
            ],
            [
                'label' => 'cpio',
                'value' => 'B'
            ],
            [
                'label' => 'dump',
                'value' => 'C'
            ],
            [
                'label' => 'tar',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-14',
        'question' => '如果僅針對系統設定檔做備份時，下列哪⼀項指令最適合?',
        'options' => [
            [
                'label' => 'tar -cvf /dev/tape /etc',
                'value' => 'A'
            ],
            [
                'label' => 'find /usr -print | cpio -p /dev/tape',
                'value' => 'B'
            ],
            [
                'label' => 'dump -f /dev/tape -0 /',
                'value' => 'C'
            ],
            [
                'label' => 'archive /var /dev/tape',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-15',
        'question' => '下列哪⼀項指令可以取回透過 dump 指令所備份的内容?',
        'options' => [
            [
                'label' => 'cpio',
                'value' => 'A'
            ],
            [
                'label' => 'extract',
                'value' => 'B'
            ],
            [
                'label' => 'recover',
                'value' => 'C'
            ],
            [
                'label' => 'restore',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-16',
        'question' => '下列哪⼀項不是 X Window 下的視窗管理環境(Window Manager) ?',
        'options' => [
            [
                'label' => 'GNOME',
                'value' => 'A'
            ],
            [
                'label' => 'KDE',
                'value' => 'B'
            ],
            [
                'label' => 'Enlightenment',
                'value' => 'C'
            ],
            [
                'label' => 'NextStep',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-17',
        'question' => '當系統非常有規律地定期執行某⼀程式時 ， 相關的設定可能存放在下列哪些地方?( 複選 )',
        'options' => [
            [
                'label' => '/etc/cron',
                'value' => 'A'
            ],
            [
                'label' => '/etc/crontab',
                'value' => 'B'
            ],
            [
                'label' => '/var/spool/cron',
                'value' => 'C'
            ],
            [
                'label' => '/var/spool/crontab',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '5-18',
        'question' => '使用者預設的 Shell 是 Bash，日常工作經常會用 Vi 去修改⼀個路徑很⻑的檔案，希望能按下[Ctrl]+[Alt]+[V]組合鍵便能執行該命令。請問應該將 BIND Hotkey 的命令寫入在下列哪⼀檔案?',
        'options' => [
            [
                'label' => '~/.inputrc',
                'value' => 'A'
            ],
            [
                'label' => '~/.bash_profile',
                'value' => 'B'
            ],
            [
                'label' => '~/.bashrc',
                'value' => 'C'
            ],
            [
                'label' => '~/hotkey',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-19',
        'question' => '假設 rsylog.conf 中設定: mail.crit  /var/log/mail.me sg，請問下列log 不會被記錄在檔案中?( 複選 )',
        'options' => [
            [
                'label' => 'mail.error',
                'value' => 'A'
            ],
            [
                'label' => 'mail.alert',
                'value' => 'B'
            ],
            [
                'label' => 'mail.panic',
                'value' => 'C'
            ],
            [
                'label' => 'mail.notice',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '5-20',
        'question' => '在備份策略上，下列哪⼀項組合是最需要備份的項⽬?',
        'options' => [
            [
                'label' => '/tmp，/usr',
                'value' => 'A'
            ],
            [
                'label' => '/etc，/opt',
                'value' => 'B'
            ],
            [
                'label' => '/home，/etc',
                'value' => 'C'
            ],
            [
                'label' => '/home，/var',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-21',
        'question' => '下列哪⼀項能將/tmp/my.log 的内容透過 localo.notice 傳給 Syslog，且能為 每⼀行 log 加註 MYLOG 這樣的標籤?',
        'options' => [
            [
                'label' => 'logger -p local0.notice -m MYLOG < /tmp/my.log',
                'value' => 'A'
            ],
            [
                'label' => 'logger -p local0.notice -m MYLOG -f /tmp/my.log',
                'value' => 'B'
            ],
            [
                'label' => 'logger -l local0.notice -m MYLOG -f /tmp/my.log',
                'value' => 'C'
            ],
            [
                'label' => 'logger -l local0.notice -m MYLOG < /tmp/my.log',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-22',
        'question' => '假設某⼀ Linux 系統每個星期天會為/home ⽬錄做完整備份，星期⼀到星期六則做差異備份。請問如下哪些設定可完成差異備份?(複選)/homebak.list \&& tar -cf /dev/nst0 -T bak.list',
        'options' => [
            [
                'label' => 'tar --newer $(date -d "last sunday" +%Y-%m-%d) -cf /dev/nst0',
                'value' => 'A'
            ],
            [
                'label' => 'find /home --newer $(date -d "last sunday" +%Y-%m-% d) >',
                'value' => 'B'
            ],
            [
                'label' => 'find /home -mtime -$(date +%w) | cpio -o > /dev/nst 0',
                'value' => 'C'
            ],
            [
                'label' => 'dump -$(date +%w)u -f /dev/nst0 /home',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ACD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '5-23',
        'question' => '某⼀ LINUX 系統管理員修改 logrotate.conf 的設定，將某⼀ log 的更換條件設為 100k。然而，當天卻發現 log 的體積明明已經超過了 100k卻並沒有被更换，而非得等到隔天才能更換。請問下列哪⼀項推測是最為可能的原因?',
        'options' => [
            [
                'label' => 'logrotate 程式可能罷工了',
                'value' => 'A'
            ],
            [
                'label' => '管理員忘了將 logrotate daemon 重新啟動',
                'value' => 'B'
            ],
            [
                'label' => 'logrotate 不接受 100k 這樣的更換條件',
                'value' => 'C'
            ],
            [
                'label' => 'logrotate 程式是用 crotab 排程啟動的，預設上，是每天深夜才跑⼀次',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-24',
        'question' => '在不需要重新切割 Partition 的情況下，下列哪⼀項能臨時啟用 128M的 swap 空間?swapon /swapswapon /swapswapon /swap',
        'options' => [
            [
                'label' => 'dd if=/dev/zero of=/swap bs=128M count=1; mkswap /s wap;',
                'value' => 'A'
            ],
            [
                'label' => 'cp /dev/swap /swap; mkswap --bs=128M --id=82 /swap ;',
                'value' => 'B'
            ],
            [
                'label' => 'mkswap if=/dev/zero of=/swap bs=128M count=1 id=82;',
                'value' => 'C'
            ],
            [
                'label' => '在沒有 Swap partition 的情況下，是沒辦法的',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-25',
        'question' => '某 Linux 系統使用 dump 程式為其系統作備份，設計 dump level 從date +%w 的結果得出，且每天使用不同的磁帶來存放備份。某星期四清晨發現硬碟故障，經檢查星期三晚上的備份工作順利完成，管理員決定將備份還原至後備主機上 。 請問下列哪⼀項操作能最完整的還原所需資料?',
        'options' => [
            [
                'label' => '先還原星期天的磁帶，然後再還原星期三的磁帶',
                'value' => 'A'
            ],
            [
                'label' => '先還原星期天的磁帶，然後再依次還原星期⼀、二、三的磁帶',
                'value' => 'B'
            ],
            [
                'label' => '先還原星期天的磁帶，然後再依次還原星期三、二、⼀的磁帶',
                'value' => 'C'
            ],
            [
                'label' => '還原星期三的磁帶即可',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-26',
        'question' => '某 Linux 使用者覺得在其預設的 Bash Shell 上使用 alias rm=’rm –I’的設計很不錯，但可惜每次登入都要重設⼀次才可使用，他希望能有⼀個⼀勞永逸的方法。請問下列哪⼀個方法最佳?',
        'options' => [
            [
                'label' => '將 alias rm=\'rm -i\'寫進其家⽬錄的.bash_login 檔案中',
                'value' => 'A'
            ],
            [
                'label' => '將 alias rm=\'rm -i\'寫進其家⽬錄的.profile 檔案中',
                'value' => 'B'
            ],
            [
                'label' => '將 alias rm=\'rm -i\'寫進其家⽬錄的.bashire 檔案中',
                'value' => 'C'
            ],
            [
                'label' => '將 alias rm=\'rm -i\'寫進/etc ⽬錄的 profile 檔案中',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-27',
        'question' => '若要觀看 CPU 的相關資訊，應去下列哪一個檔案下查看 ?',
        'options' => [
            [
                'label' => '/etc/cpuinfo',
                'value' => 'A'
            ],
            [
                'label' => '/proc/cpuinfo',
                'value' => 'B'
            ],
            [
                'label' => '/var/cpustat',
                'value' => 'C'
            ],
            [
                'label' => '/dev/cpustat',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-28',
        'question' => '使用 dmesg 指令可觀看下列哪⼀項訊息?',
        'options' => [
            [
                'label' => '郵件伺服器的錯誤訊息',
                'value' => 'A'
            ],
            [
                'label' => '系統產生的錯誤訊息',
                'value' => 'B'
            ],
            [
                'label' => '開機時的訊息',
                'value' => 'C'
            ],
            [
                'label' => '使用者遠端登入的訊息',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-29',
        'question' => '使用 uptime 指令可觀看下列哪些 Linux 系統訊息?( 複選 )',
        'options' => [
            [
                'label' => '系統平均負載',
                'value' => 'A'
            ],
            [
                'label' => '已開機累計時間',
                'value' => 'B'
            ],
            [
                'label' => '⽬前使用者人數',
                'value' => 'C'
            ],
            [
                'label' => '上次關機時間',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '5-30',
        'question' => '關於 last 指令的述，下列哪些正確?( 複選 )',
        'options' => [
            [
                'label' => '可查看使用者登入訊息',
                'value' => 'A'
            ],
            [
                'label' => '登入方式包括 Telnet、Ftp',
                'value' => 'B'
            ],
            [
                'label' => '可記錄⼀年以上的資料',
                'value' => 'C'
            ],
            [
                'label' => '可了解系統是否有被入侵',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '5-31',
        'question' => '下列哪⼀個指令可解開附檔名為「*.bz2」的檔案?( 複選 )',
        'options' => [
            [
                'label' => 'tar -zxvf',
                'value' => 'A'
            ],
            [
                'label' => 'bunzip2',
                'value' => 'B'
            ],
            [
                'label' => 'gzip -d',
                'value' => 'C'
            ],
            [
                'label' => 'bzip2 -d',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '5-32',
        'question' => '假設要將檔案 test 建立⼀個包裝檔 test.tar 應使用下列哪⼀項指令?',
        'options' => [
            [
                'label' => 'tar -xvf test.tar test',
                'value' => 'A'
            ],
            [
                'label' => 'tar -xvf test test.tar',
                'value' => 'B'
            ],
            [
                'label' => 'tar -cvf test.tar test',
                'value' => 'C'
            ],
            [
                'label' => 'tar -cvf test test.tar',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-33',
        'question' => '關於備份指令 cpio 參數的敘述，下列哪⼀項錯誤?',
        'options' => [
            [
                'label' => 'v 表備份過程顯示檔案名稱',
                'value' => 'A'
            ],
            [
                'label' => 'u 表從備份檔或裝置將資料複製回系統中',
                'value' => 'B'
            ],
            [
                'label' => 'o 表將資料備份到檔案或裝置',
                'value' => 'C'
            ],
            [
                'label' => 't 表查看建立的檔案或裝置內容',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-34',
        'question' => '在 Bash 中組合按鍵[Ctrl]+[Z]是代表下列哪⼀項功能?',
        'options' => [
            [
                'label' => '暫停⽬前指令',
                'value' => 'A'
            ],
            [
                'label' => '終止⽬前指令',
                'value' => 'B'
            ],
            [
                'label' => '暫停螢幕輸出',
                'value' => 'C'
            ],
            [
                'label' => '恢復螢幕輸出',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-35',
        'question' => '關於指令重導向的敘述，下列哪⼀項正確?',
        'options' => [
            [
                'label' => '> 表由右邊讀入參數',
                'value' => 'A'
            ],
            [
                'label' => '> 以增加的方式輸出資料到右邊的檔案',
                'value' => 'B'
            ],
            [
                'label' => '2> 錯誤的資料輸出',
                'value' => 'C'
            ],
            [
                'label' => '>> 以覆蓋的方式輸出資料到右邊的檔案',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-36',
        'question' => '關於[|]Pipe 符號的敘述，下列哪⼀項錯誤?',
        'options' => [
            [
                'label' => '可將前⼀個指令的輸出作為下⼀個指令的輸入',
                'value' => 'A'
            ],
            [
                'label' => '無法直接處理 Standard Error',
                'value' => 'B'
            ],
            [
                'label' => '⼀行指令只能有⼀個管線',
                'value' => 'C'
            ],
            [
                'label' => '可搭配其他指令作有效率的輸出',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-37',
        'question' => '請問要讓本機的 rsyslogd 接受遠端系統(IP 192.168.0.1 )的 rsyslo gd經由 UTP 協定 port 514 所輸出的訊息，則須在本機 rsyslogd 加入下列哪些選項内容於設定檔中? ( 複選 )',
        'options' => [
            [
                'label' => '$ ModLoad imudp.so',
                'value' => 'A'
            ],
            [
                'label' => '*.*       192.168.0.1:514',
                'value' => 'B'
            ],
            [
                'label' => '$ UDPServerRun 514',
                'value' => 'C'
            ],
            [
                'label' => '$Input-UDPServerRun 514',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AB',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '5-38',
        'question' => '請問  rsyslogd 將紀錄送往其他電腦時，所使用的通訊協定為下列哪一項 ?',
        'options' => [
            [
                'label' => 'ICMP',
                'value' => 'A'
            ],
            [
                'label' => 'IP',
                'value' => 'B'
            ],
            [
                'label' => 'TCP',
                'value' => 'C'
            ],
            [
                'label' => 'UDP',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-39',
        'question' => '請問 rsyslogd 將紀錄送往其他電腦時 ， 所使用的通訊埠為下列哪⼀項?',
        'options' => [
            [
                'label' => '541',
                'value' => 'A'
            ],
            [
                'label' => '154',
                'value' => 'B'
            ],
            [
                'label' => '514',
                'value' => 'C'
            ],
            [
                'label' => '415',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '5-40',
        'question' => '請問 rsyslog 的預設組態設定檔為下列哪⼀項?',
        'options' => [
            [
                'label' => '/etc/rsyslog.conf',
                'value' => 'A'
            ],
            [
                'label' => '/etc/rsyslogd.conf',
                'value' => 'B'
            ],
            [
                'label' => '/etc/klog.conf',
                'value' => 'C'
            ],
            [
                'label' => '/etc/klogd.conf',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-01',
        'question' => '使用 rpm 指令移除套件的過程中常發現有 RPM 檔相依性問題，若要無視依存關係來進行移除套件的話，可使用下列哪⼀項指令參數?',
        'options' => [
            [
                'label' => '-e -nodp',
                'value' => 'A'
            ],
            [
                'label' => '-ed',
                'value' => 'B'
            ],
            [
                'label' => '-e -nodeps',
                'value' => 'C'
            ],
            [
                'label' => '-e',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-02',
        'question' => '關於 rpm 指令的敘述，下列哪些正確?( 複選 )關資訊',
        'options' => [
            [
                'label' => '-qa 可用於查詢某個檔案是屬於哪⼀個套件軟體的',
                'value' => 'A'
            ],
            [
                'label' => '-qi 其中 q 代表 query，i 代表 information 可用於查詢已安装的套件相',
                'value' => 'B'
            ],
            [
                'label' => '-e 用於移除套件',
                'value' => 'C'
            ],
            [
                'label' => '–U 用於升級套件對已安裝的套件執行升級動作',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BCD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '6-03',
        'question' => '如果 Fedora 系統要線上升級已安裝的套件，應使用下列哪⼀項指令?',
        'options' => [
            [
                'label' => 'rpm -U',
                'value' => 'A'
            ],
            [
                'label' => 'dpkg -u',
                'value' => 'B'
            ],
            [
                'label' => 'yum groupinstall',
                'value' => 'C'
            ],
            [
                'label' => 'yum update',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-04',
        'question' => '請問指令 rpm-V bind 有下列哪⼀項作用?',
        'options' => [
            [
                'label' => '驗證 BIND 套件的執行過程',
                'value' => 'A'
            ],
            [
                'label' => '驗證 BIND 套件檔案的異動',
                'value' => 'B'
            ],
            [
                'label' => '驗證 BIND 套件的版本資訊',
                'value' => 'C'
            ],
            [
                'label' => '驗證 BIND 套件檔案的 source code',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-05',
        'question' => '假設當要安裝 RPM 封裝的時候，會出現有關依存關係的錯誤。在調查之後，發現原因是在沒有經過封裝管理來安裝的程式庫，實際並沒有依存關係。若要無視依存關係來進行安裝，應使用下列哪⼀項指令?',
        'options' => [
            [
                'label' => '-R',
                'value' => 'A'
            ],
            [
                'label' => '-U',
                'value' => 'B'
            ],
            [
                'label' => '--nodeps',
                'value' => 'C'
            ],
            [
                'label' => '--force',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-06',
        'question' => '如附圖所示，RPM 套件安裝中出現附圖中的訊息無法安裝，請問下列敘述哪⼀項正確?#rpm -ivh bar-1.0-1.386.rpmfailed dependencies:   foo is needed by bar-1.0-1',
        'options' => [
            [
                'label' => '該軟體已經安裝過了',
                'value' => 'A'
            ],
            [
                'label' => ')軟體相衝或不相容',
                'value' => 'B'
            ],
            [
                'label' => '此套件與其它套件有相依性問題',
                'value' => 'C'
            ],
            [
                'label' => '套件版本無法相容',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-07',
        'question' => 'RPM 套件封裝製作中，Srpm 檔存放路徑/rpmbuild/BUILD ⽬錄主要的功能為下列哪⼀項?',
        'options' => [
            [
                'label' => 'Source Code 進行解壓縮與編譯動作⽬錄',
                'value' => 'A'
            ],
            [
                'label' => '套件規範檔，主宰製作流程',
                'value' => 'B'
            ],
            [
                'label' => '包裝好的 Binary RPM 套件存放⽬錄',
                'value' => 'C'
            ],
            [
                'label' => '包裝好的原始碼格式 RPM 套件存放⽬錄',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-08',
        'question' => 'RPM 套件封裝製作中，rpmbuild -ba zip-2.3.spec 的作用為下列哪⼀項?Package',
        'options' => [
            [
                'label' => '檢查 File List',
                'value' => 'A'
            ],
            [
                'label' => '測試包裝 RPM 套件，但並不會真的產生 RPM 套件',
                'value' => 'B'
            ],
            [
                'label' => '執行%Prep，%build %install section，並產生 Binary RPM Packa ge',
                'value' => 'C'
            ],
            [
                'label' => '執行%Prep，%build %install section，並產生 Binary 與 source RP M',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-09',
        'question' => 'RPM 套件封裝製作中，Spec 檔案其 Spec 主要工作有下列哪些?',
        'options' => [
            [
                'label' => '將程式原始碼解壓縮',
                'value' => 'A'
            ],
            [
                'label' => '編譯 Source Code',
                'value' => 'B'
            ],
            [
                'label' => '包裝 Binary RPM 及 Source RPM',
                'value' => 'C'
            ],
            [
                'label' => '清除包裝過程在 BUILD ⽬錄產生的建構⽬錄',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABCD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '6-10',
        'question' => '下列哪⼀項指令，可以安裝⼀個未曾安裝過的 RPM 套件?',
        'options' => [
            [
                'label' => 'rpm -ivh pack-1.1.5-i386.rpm',
                'value' => 'A'
            ],
            [
                'label' => 'rpm -Ivh pack-1.1.5-i386.rpm',
                'value' => 'B'
            ],
            [
                'label' => 'rpm -uvh pack-1.1.5-i386.rpm',
                'value' => 'C'
            ],
            [
                'label' => 'rpm -Uvh pack-1.1.5-i386.rpm',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-11',
        'question' => '下列哪⼀項指令，可以升級 RPM 套件?',
        'options' => [
            [
                'label' => 'rpm -ivh pack-1.1.5-i386.rpm',
                'value' => 'A'
            ],
            [
                'label' => 'rpm -Ivh pack-1.1.5-i386.rpm',
                'value' => 'B'
            ],
            [
                'label' => 'rpm -uvh pack-1.1.5-i386.rpm',
                'value' => 'C'
            ],
            [
                'label' => 'rpm -Uvh pack-1.1.5-i386.rpm',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-12',
        'question' => '下列哪些是使用 RPM 套件管理系統的優點?(複選)',
        'options' => [
            [
                'label' => '無須自行編譯軟體',
                'value' => 'A'
            ],
            [
                'label' => '套件安裝時，會記錄所有安裝檔案之名稱與⽬錄，方便未來移除所需',
                'value' => 'B'
            ],
            [
                'label' => '隨時可查詢⽬前所安裝之所有套件列表',
                'value' => 'C'
            ],
            [
                'label' => '所安裝之軟體程式皆為跨平台格式，方便未來轉移系統',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '6-13',
        'question' => '下列哪⼀項指令，適用於查詢⽬前系統所安装的 SSH 程式 RPM 套件版本?',
        'options' => [
            [
                'label' => 'rpm -q ssh',
                'value' => 'A'
            ],
            [
                'label' => 'rpm -v ssh',
                'value' => 'B'
            ],
            [
                'label' => 'rpm -k ssh',
                'value' => 'C'
            ],
            [
                'label' => 'rpm -l ssh',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-14',
        'question' => '修改下列哪⼀項設定檔，可以改變系統尋找 shared library 的⽬錄?',
        'options' => [
            [
                'label' => '/etc/ld.so.conf',
                'value' => 'A'
            ],
            [
                'label' => '/usr/ld.so.conf',
                'value' => 'B'
            ],
            [
                'label' => '/lib/ld.so.conf',
                'value' => 'C'
            ],
            [
                'label' => '/var/ld.so.conf',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-15',
        'question' => '下列哪⼀項指令，可以顯示⽬前系統找得到的所有 share Library 的名稱及版本?',
        'options' => [
            [
                'label' => 'ldconfig -l',
                'value' => 'A'
            ],
            [
                'label' => 'ldconfig -v',
                'value' => 'B'
            ],
            [
                'label' => 'ldconfig -all',
                'value' => 'C'
            ],
            [
                'label' => 'ldconfig -list',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-16',
        'question' => '關於 C 語⾔原始碼的敘述，下列哪些正確?( 複選 )Internet 上傳遞',
        'options' => [
            [
                'label' => 'C 語⾔原始碼的格式通常為文字檔，設計人員可以對之進行編輯',
                'value' => 'A'
            ],
            [
                'label' => 'C 語⾔原始碼必須經過編譯之後，才能被載入執行',
                'value' => 'B'
            ],
            [
                'label' => '在 Open Source 界中，C 語⾔原始碼通常會被包裝為 Tarball 的方式在',
                'value' => 'C'
            ],
            [
                'label' => 'C 語⾔原始碼可以透過直譯器載入並執行',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '6-17',
        'question' => '某管理員用 Tarball 安裝了某⼀套性，但該套件使用的動態函式庫路徑並沒出現在系統當前的設定中 ， 導致該動態函式庫無法被預先載入至記憶體中。請問應使用下列哪⼀項方法解決此問題?命令命令ldconfig 命令',
        'options' => [
            [
                'label' => '編輯/etc/ldd.conf 將套件所需的函式庫⽬錄所在路徑加入，並執行 ldd',
                'value' => 'A'
            ],
            [
                'label' => '編輯/etc/ld.so.conf 將套件所需的函式庫⽬録所在路徑加入 ， 並執行 ldd',
                'value' => 'B'
            ],
            [
                'label' => '編輯/etc/ld.so.cache 將套件所需的函式庫⽬錄所在路徑加入即可',
                'value' => 'C'
            ],
            [
                'label' => '編輯/etc/ld.so.conf 將套件所需的函式庫⽬錄所在路徑加入，並執行',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-18',
        'question' => '下列哪⼀項 rpm 命令參數，可以查詢某⼀檔案是由哪⼀ RPM 套件帶來的?',
        'options' => [
            [
                'label' => '-qf',
                'value' => 'A'
            ],
            [
                'label' => '-qR',
                'value' => 'B'
            ],
            [
                'label' => '-q --whatprovides',
                'value' => 'C'
            ],
            [
                'label' => '--whatprovides',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-19',
        'question' => '下列哪⼀項操作可列出系統當前的動態函式庫與其路徑的對照表?',
        'options' => [
            [
                'label' => 'ldconfig -p',
                'value' => 'A'
            ],
            [
                'label' => 'ldconfig -v',
                'value' => 'B'
            ],
            [
                'label' => 'cat/etc/ld.so.conf',
                'value' => 'C'
            ],
            [
                'label' => 'cat/etc/ld.so.cache',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-20',
        'question' => '在下載並解開 Tarball 之後，下列哪⼀項操作是最為建議的順序?',
        'options' => [
            [
                'label' => 'make; ./configure; make install; less README',
                'value' => 'A'
            ],
            [
                'label' => 'make auto ; less README',
                'value' => 'B'
            ],
            [
                'label' => 'less README ; make ; make install ; ./configure',
                'value' => 'C'
            ],
            [
                'label' => 'less README;./configure ; make ; make install',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-21',
        'question' => '關於 rpm 指令的參數，下列哪些正確?( 複選 )',
        'options' => [
            [
                'label' => '--nodeps 表不考慮相依性關係',
                'value' => 'A'
            ],
            [
                'label' => '- -replacepkgs 覆蓋先前安裝的套件',
                'value' => 'B'
            ],
            [
                'label' => '-Uvh 表移除先前安裝套件',
                'value' => 'C'
            ],
            [
                'label' => '-ivh 表昇級先前套件',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AB',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '6-22',
        'question' => '使用 rpm 指令安裝套件時，會將套件的資訊寫入下列哪⼀項檔案?',
        'options' => [
            [
                'label' => '/usr/lib/rpm',
                'value' => 'A'
            ],
            [
                'label' => '/usr/bin/rpm',
                'value' => 'B'
            ],
            [
                'label' => '/etc/lib/rpm',
                'value' => 'C'
            ],
            [
                'label' => '/var/lib/rpm',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-23',
        'question' => '若要查詢是否已經安裝某套件，應使用下列哪一項 rpm 指令參數 ?',
        'options' => [
            [
                'label' => 'q',
                'value' => 'A'
            ],
            [
                'label' => 'v',
                'value' => 'B'
            ],
            [
                'label' => 's',
                'value' => 'C'
            ],
            [
                'label' => 'i',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-24',
        'question' => '使用 rpm 指令安裝套件時，出現「#」符號是代表下列哪⼀項意思?',
        'options' => [
            [
                'label' => '有安裝錯誤的現象',
                'value' => 'A'
            ],
            [
                'label' => '正在做套件錯誤的修正',
                'value' => 'B'
            ],
            [
                'label' => '顯示出安裝的進度情形',
                'value' => 'C'
            ],
            [
                'label' => '代表安裝時 CPU 使用率',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-25',
        'question' => '軟體的發布可採用原始碼的方式來進行，Linux 是採用下列哪⼀項語⾔來進行原始碼的編譯?',
        'options' => [
            [
                'label' => 'COBOL',
                'value' => 'A'
            ],
            [
                'label' => 'C',
                'value' => 'B'
            ],
            [
                'label' => 'Fortran',
                'value' => 'C'
            ],
            [
                'label' => 'Qbasic',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-26',
        'question' => '若想知道程式對應哪些共用函式庫，可使用下列哪⼀項指令查詢?',
        'options' => [
            [
                'label' => 'dep',
                'value' => 'A'
            ],
            [
                'label' => 'lib',
                'value' => 'B'
            ],
            [
                'label' => 'ldd',
                'value' => 'C'
            ],
            [
                'label' => 'dpkg',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-27',
        'question' => '如欲得知⽬前系統上所有已安裝的 RPM 封裝，可使用下列哪⼀項指令查詢?',
        'options' => [
            [
                'label' => 'rpm -qa',
                'value' => 'A'
            ],
            [
                'label' => 'rpm - Va',
                'value' => 'B'
            ],
            [
                'label' => 'rpm -lqp',
                'value' => 'C'
            ],
            [
                'label' => 'rpm -pa',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-28',
        'question' => '如欲檢視⽬前系統上所有已安裝的 RPM 檔案屬性是否變更，可使用下列哪⼀項指令查詢?',
        'options' => [
            [
                'label' => 'rpm -qa',
                'value' => 'A'
            ],
            [
                'label' => 'rpm - Va',
                'value' => 'B'
            ],
            [
                'label' => 'rpm -lqp',
                'value' => 'C'
            ],
            [
                'label' => 'rpm -pa',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-29',
        'question' => '系統上有⼀檔案 foo，欲得知 foo 是屬於哪⼀個 RPM 封裝，可使用下列哪⼀項指令查詢?',
        'options' => [
            [
                'label' => 'rpm -qa foo',
                'value' => 'A'
            ],
            [
                'label' => 'rpm - Va foo',
                'value' => 'B'
            ],
            [
                'label' => 'rpm -qp foo',
                'value' => 'C'
            ],
            [
                'label' => 'rpm -qf foo',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '6-30',
        'question' => 'foo-2.4.29-l.i386.rpm 為⼀個已安裝的 RPM 封裝，請問下列哪⼀項指令可移除此封裝?',
        'options' => [
            [
                'label' => 'rpm -e foo-2.4.29-l.i386.rpm',
                'value' => 'A'
            ],
            [
                'label' => 'rpm -ef foo-2.4.29',
                'value' => 'B'
            ],
            [
                'label' => 'rpm -e foo-2.4.29',
                'value' => 'C'
            ],
            [
                'label' => 'rpm -ef foo-2.4.29-l.i386.rpm',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-01',
        'question' => '如附圖顯示，圖中的底線應填入下列哪⼀項?For x in a b c d e______echo $xdone',
        'options' => [
            [
                'label' => 'do',
                'value' => 'A'
            ],
            [
                'label' => 'while',
                'value' => 'B'
            ],
            [
                'label' => 'until',
                'value' => 'C'
            ],
            [
                'label' => 'esac',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-02',
        'question' => '關於 Shell Script 的敘述，下列哪⼀項錯誤?',
        'options' => [
            [
                'label' => 'Shell Script 是直譯式檔案',
                'value' => 'A'
            ],
            [
                'label' => '以文字編輯器建立 Script 內容',
                'value' => 'B'
            ],
            [
                'label' => '需要用 make 指令編譯成執行檔',
                'value' => 'C'
            ],
            [
                'label' => '利用 chmod 指令來將 Script 變為可執行檔',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-03',
        'question' => '如附圖所示，變數設定其傳回的值，下列哪⼀項正確?user_age=25echo "user_age=$user_age"',
        'options' => [
            [
                'label' => 'user_age=$user_age',
                'value' => 'A'
            ],
            [
                'label' => 'user_age=25',
                'value' => 'B'
            ],
            [
                'label' => '25',
                'value' => 'C'
            ],
            [
                'label' => '1',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-04',
        'question' => '如附圖所示，變數設定其傳回的值，下列哪⼀項正確?now=\'date\'echo $now',
        'options' => [
            [
                'label' => '四 6 月 3  17:35:07  CTS  2004',
                'value' => 'A'
            ],
            [
                'label' => 'date',
                'value' => 'B'
            ],
            [
                'label' => '$now',
                'value' => 'C'
            ],
            [
                'label' => '1',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-05',
        'question' => '如附圖所示，圖中的底線應填入下列哪⼀項?echo -n "請輸入您選項(1/2/3/4): "read optcase ___  in1)echo "1 太好了!"; ;2)echo "2 太妙了!"; ;3)echo "3 太棒了!"; ;4)echo "4 太爽了! "; ;*) echo "$opt 超出選項 1-4 的範圍"esac',
        'options' => [
            [
                'label' => 'opt',
                'value' => 'A'
            ],
            [
                'label' => '$opt',
                'value' => 'B'
            ],
            [
                'label' => 'echo',
                'value' => 'C'
            ],
            [
                'label' => 'int',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-06',
        'question' => '下列⼀項指令，可以讀取鍵盤輸入的内容?',
        'options' => [
            [
                'label' => 'read',
                'value' => 'A'
            ],
            [
                'label' => 'write',
                'value' => 'B'
            ],
            [
                'label' => 'set',
                'value' => 'C'
            ],
            [
                'label' => 'array',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-07',
        'question' => '下列哪⼀項是 Shell Script 中$RANDOM 變數的作用?',
        'options' => [
            [
                'label' => '讀取亂數',
                'value' => 'A'
            ],
            [
                'label' => '傳遞亂數',
                'value' => 'B'
            ],
            [
                'label' => '產生亂數',
                'value' => 'C'
            ],
            [
                'label' => '無任何作用',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-08',
        'question' => '如附圖所示，若要輸出結果為 david，圖中的底線應填入下列哪⼀項?#!/bin/bashNAME=david__________',
        'options' => [
            [
                'label' => 'echo \'$NAME\'',
                'value' => 'A'
            ],
            [
                'label' => 'echo \\"$NAME\\"',
                'value' => 'B'
            ],
            [
                'label' => 'echo "$NAME"',
                'value' => 'C'
            ],
            [
                'label' => 'echo \"$NAME\"',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-09',
        'question' => '當要執行剛撰寫完成的 Shell Script 時，系統卻告知program.sh:Permission denied.的錯誤訊息，下列哪⼀項為可能的原因?',
        'options' => [
            [
                'label' => 'program.sh 檔案之權限並未設定為「可執行」',
                'value' => 'A'
            ],
            [
                'label' => 'program.sh 檔案内容的第⼀行，並未明確指定 Shell 路徑',
                'value' => 'B'
            ],
            [
                'label' => 'program.sh 程式嘗試讀取或寫入自己沒有權限的檔案',
                'value' => 'C'
            ],
            [
                'label' => 'program.sh 程式語⾔寫作語意錯誤(Syntax Error)',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-10',
        'question' => '下列哪⼀項為撰寫 Shell Script 程式的宣告?',
        'options' => [
            [
                'label' => '#/bin/bash',
                'value' => 'A'
            ],
            [
                'label' => '#!/bin/bash',
                'value' => 'B'
            ],
            [
                'label' => '#$/bin/bash',
                'value' => 'C'
            ],
            [
                'label' => '#%/bin/bash',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-11',
        'question' => '如附圖所示，執行該 Script 會得到下列哪⼀項輸出結果?#!/bin/bash$name=davidecho $name',
        'options' => [
            [
                'label' => 'name',
                'value' => 'A'
            ],
            [
                'label' => 'david',
                'value' => 'B'
            ],
            [
                'label' => 'name=david',
                'value' => 'C'
            ],
            [
                'label' => 'command not found',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-12',
        'question' => '如附圖所示，執行該 Script 會得到下列哪⼀項輸出結果?#!/bin/bashstr1=Davidstr2=davidif [ $strl = $str2 ]; thenecho "same"elseecho "difference"',
        'options' => [
            [
                'label' => 'same',
                'value' => 'A'
            ],
            [
                'label' => 'difference',
                'value' => 'B'
            ],
            [
                'label' => '無法執行，因為字串比對要使用==',
                'value' => 'C'
            ],
            [
                'label' => '無法執行，因為字串比對要使用-eq',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-13',
        'question' => '若想要進行 Script 逐行偵錯 ， 可將 Script 的第⼀行修改為下列哪⼀項?',
        'options' => [
            [
                'label' => '#!/bin/bash -x',
                'value' => 'A'
            ],
            [
                'label' => '#!/bin/bash -d',
                'value' => 'B'
            ],
            [
                'label' => '#!/bin/bash -r',
                'value' => 'C'
            ],
            [
                'label' => '#!/bin/bash -t',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-14',
        'question' => '關於變數的定義，下列哪些錯誤?( 複選 )',
        'options' => [
            [
                'label' => 'A1=BC',
                'value' => 'A'
            ],
            [
                'label' => 'A1="B C"',
                'value' => 'B'
            ],
            [
                'label' => 'A1 = "B C"',
                'value' => 'C'
            ],
            [
                'label' => '1A="B C"',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'CD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '7-15',
        'question' => '如附圖所示，該 Script 存放在~/bin ⽬錄之下，然後使用者在家⽬錄內執行 Script。請問當 Script 結束後，使用者的工作⽬錄會在下列哪⼀項?foobar.sh:#!/bin/bashcd / tmp',
        'options' => [
            [
                'label' => '~/',
                'value' => 'A'
            ],
            [
                'label' => '~/bin',
                'value' => 'B'
            ],
            [
                'label' => '/tmp',
                'value' => 'C'
            ],
            [
                'label' => '/',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-16',
        'question' => '如附圖所示，使用者撰寫了兩個 Script 後，在指令上執行/bin/false&& ./foo.sh || ./.sh，請問會得到下列哪⼀項輸出結果?foo.sh:    bar.sh:#!/bin/bash   #!/bin/bashecho $0      echo $0exit 1        exit 0',
        'options' => [
            [
                'label' => './foo.sh',
                'value' => 'A'
            ],
            [
                'label' => './bar.sh',
                'value' => 'B'
            ],
            [
                'label' => './foo.sh 與./bar.sh',
                'value' => 'C'
            ],
            [
                'label' => '沒有任何輸出結果',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-17',
        'question' => '在⽬前⽬錄撰寫⼀⽀ Script 名為 test.sh，但因為沒有建立 Path， 應該使用下列哪些指令執行此 test.sh?( 複選 )',
        'options' => [
            [
                'label' => 'test.sh',
                'value' => 'A'
            ],
            [
                'label' => './ test.sh',
                'value' => 'B'
            ],
            [
                'label' => 'sh test.sh',
                'value' => 'C'
            ],
            [
                'label' => 'exec test.sh',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '7-18',
        'question' => '關於 Shell Script 的敘述，以下列哪些正確?( 複選 )Script',
        'options' => [
            [
                'label' => '#表示註解的意思',
                'value' => 'A'
            ],
            [
                'label' => '#!後面為指令解譯器',
                'value' => 'B'
            ],
            [
                'label' => '#!/bin/sh 表示以 Bash 來解譯檔案中的指令',
                'value' => 'C'
            ],
            [
                'label' => '使用 Vi 編輯完成後不須變更檔案權限，即可使用 Shell 程式直接執行該',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '7-19',
        'question' => '關於 Shell Script 執行時的步驟敘述，下列哪⼀項錯誤?',
        'options' => [
            [
                'label' => '指令間的空白會被忽略掉',
                'value' => 'A'
            ],
            [
                'label' => '空白的行也會忽略掉',
                'value' => 'B'
            ],
            [
                'label' => '若要延伸到下⼀行可使用/符號',
                'value' => 'C'
            ],
            [
                'label' => '#號可作為註解',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-20',
        'question' => '⼀⽀ Shell Script 其內容為 a=5; b=2;c=$a*$b; echo $c，其 執行結果為下列哪⼀項?',
        'options' => [
            [
                'label' => '10',
                'value' => 'A'
            ],
            [
                'label' => '$a*$b',
                'value' => 'B'
            ],
            [
                'label' => '5*2',
                'value' => 'C'
            ],
            [
                'label' => '空白',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-21',
        'question' => '關於 Shell Script 的參數敘述，下列哪些正確?( 複選 )',
        'options' => [
            [
                'label' => '$0 表第⼀個參數',
                'value' => 'A'
            ],
            [
                'label' => '$1 表 Script 本身',
                'value' => 'B'
            ],
            [
                'label' => '⼀般而⾔ Script 後面接著的是$1',
                'value' => 'C'
            ],
            [
                'label' => '數與參數之間應有空白間隔',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'CD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '7-22',
        'question' => '關於 Shell Script 的 case 指令用法，下列敘述哪些錯誤?( 複選 )',
        'options' => [
            [
                'label' => '以 end case 作為指令敘述的結尾',
                'value' => 'A'
            ],
            [
                'label' => '以 break 作為條件區塊的結束',
                'value' => 'B'
            ],
            [
                'label' => '*加上右括號代表在所有條件都不符合時則執行其後面的敘述',
                'value' => 'C'
            ],
            [
                'label' => '可使用參數$1 接在執行檔案的後面執行',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AB',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '7-23',
        'question' => '如附圖所示，關於此 Shell Script 的 for 迴圈敘述，下列那些正確? ( 複選)for(( i=1 ; i<=10 ; i++ ))',
        'options' => [
            [
                'label' => 'i 的起始值為 1',
                'value' => 'A'
            ],
            [
                'label' => 'i++是指 i 再加上 i 的意思',
                'value' => 'B'
            ],
            [
                'label' => 'i 若小於或等於 10 則跳出迴圈',
                'value' => 'C'
            ],
            [
                'label' => '執行完迴圈内的敘述後會將 i 加 1',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '7-24',
        'question' => '⼀個名為 foo 的 Shell Script ， foo 程式能被執行的先決條件有下列哪些?(複選 )的符號指示',
        'options' => [
            [
                'label' => '為了安全考量 foo 可以開放執行的權限但不需要有讀的權限',
                'value' => 'A'
            ],
            [
                'label' => '如果要使命令./foo 能夠被指定的 Shell 所執行的話，foo 中必須要有#!',
                'value' => 'B'
            ],
            [
                'label' => 'foo 必須要有可讀與執行的權限開放給欲執行 foo 的使用者',
                'value' => 'C'
            ],
            [
                'label' => 'Shell Script ⼀定要用 Bash 來執行',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '7-25',
        'question' => '如附圖所示，請問該 Shell Script 的輸出為下列哪⼀項?while [1]doecho “Yes”done',
        'options' => [
            [
                'label' => '根本不會輸出任何訊息',
                'value' => 'A'
            ],
            [
                'label' => '輸出⼀次 Yes 後即停止',
                'value' => 'B'
            ],
            [
                'label' => '無限迴圈⼀直輸出 Yes',
                'value' => 'C'
            ],
            [
                'label' => '輸出二次 Yes 後即停止',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-26',
        'question' => '如附圖所示，執行 Script 會得到下列哪⼀項輸出結果?#!/bin/bashHELLO=Hellofunction hello{local HELLO=worldecho -n "$HELLO"}echo -n "$HELLO"helloecho - n "$HELLO"',
        'options' => [
            [
                'label' => 'hello Hello hello',
                'value' => 'A'
            ],
            [
                'label' => 'Hello World Hello',
                'value' => 'B'
            ],
            [
                'label' => 'hello world hello',
                'value' => 'C'
            ],
            [
                'label' => 'Hello hello Hello',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-27',
        'question' => '在 Bash 的 Shell Script 當中，數字比較要用下列哪⼀項運算元?',
        'options' => [
            [
                'label' => '=',
                'value' => 'A'
            ],
            [
                'label' => '==',
                'value' => 'B'
            ],
            [
                'label' => '-eq',
                'value' => 'C'
            ],
            [
                'label' => 'eq',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '7-28',
        'question' => '如命令提示字元後有⼀命令行./foo 1 2 3 4 5 6 7 8 9 10 11 請問 下列哪些正確?(複選)',
        'options' => [
            [
                'label' => '$1 代表 foo',
                'value' => 'A'
            ],
            [
                'label' => '$0 代表 foo',
                'value' => 'B'
            ],
            [
                'label' => '$10 為 10',
                'value' => 'C'
            ],
            [
                'label' => '$11 為 11',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BCD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '7-29',
        'question' => '如附圖所示，關於該 Shell Script 的敘述，下列哪些正確? (複選)echo -n "process $file now ...."myprog $file > /dev/nullif [ $? -eq 0 ]; thenecho "OK"elseecho "Failed"fi',
        'options' => [
            [
                'label' => '利用 echo -n 將游標保留在與 process $file now ...同⼀行',
                'value' => 'A'
            ],
            [
                'label' => '執行 myprog $file 並將輸出導出',
                'value' => 'B'
            ],
            [
                'label' => '若 myprog $file 執行成功，顯示 OK:若失敗則顯示 Failed',
                'value' => 'C'
            ],
            [
                'label' => '若執行的結果正確則輸出⼀行於螢幕的畫面',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '7-30',
        'question' => '請問下列哪些為 Bash 的迴圈指令?( 複選 )',
        'options' => [
            [
                'label' => 'while',
                'value' => 'A'
            ],
            [
                'label' => 'until',
                'value' => 'B'
            ],
            [
                'label' => 'foreach',
                'value' => 'C'
            ],
            [
                'label' => 'for',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '8-01',
        'question' => '⽬前 Kernel 已⽀援 udev 的架構並取代了 devfs，請問下列哪⼀項敘述錯誤?',
        'options' => [
            [
                'label' => 'udev 能夠根據規則於 insert kernel module 時自動建立 device node',
                'value' => 'A'
            ],
            [
                'label' => 'udev 動態建立 device node，不須事先於/dev 下建置設備檔案',
                'value' => 'B'
            ],
            [
                'label' => '提供 user 更方便的 API 存取⽬前 device 的資訊',
                'value' => 'C'
            ],
            [
                'label' => '在 Kernel 2.4 以上已提供 udev 這個功能',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-02',
        'question' => '關於在 make menuconfig 組態介面中的符號敘述，下列哪⼀項錯誤?module，可以在開機之後另外載入的功能被編入核⼼影像檔中它會存放在 filesystem 中，開機後可以手動載入使用',
        'options' => [
            [
                'label' => '[ ] (excludes)表示該選項沒有被選取，編譯後的核⼼將不會有此功能',
                'value' => 'A'
            ],
            [
                'label' => '< > (module capable)表示該選項沒有被選取，而且是可以被當作是',
                'value' => 'B'
            ],
            [
                'label' => '[*] (built-in)表示該選項有被選取，編譯後的核⼼包含此功能， 而且該',
                'value' => 'C'
            ],
            [
                'label' => '<M> (module)表示該選項有被選取 ， 而且是被編譯成module的形式，',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-03',
        'question' => '確保新編譯的 Kernel 不會被之前的設定所影響，可使用下列哪⼀項指令將編譯 Kernel 產生的檔案都清除(包含 configure)?',
        'options' => [
            [
                'label' => 'make menuconfig',
                'value' => 'A'
            ],
            [
                'label' => 'make',
                'value' => 'B'
            ],
            [
                'label' => 'make mrproper',
                'value' => 'C'
            ],
            [
                'label' => 'make configure',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-04',
        'question' => '若要移除已載入系統的 foo 核⼼模組，可以執行下列哪些指令? ( 複選 )',
        'options' => [
            [
                'label' => 'rmmod foo',
                'value' => 'A'
            ],
            [
                'label' => 'modprobe -r foo',
                'value' => 'B'
            ],
            [
                'label' => 'chmod foo',
                'value' => 'C'
            ],
            [
                'label' => 'depmod foo',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'AB',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '8-05',
        'question' => '下列哪些指令可以設定 Kernel 功能組態?( 複選 )',
        'options' => [
            [
                'label' => 'make oldconfig',
                'value' => 'A'
            ],
            [
                'label' => 'make menuconfig',
                'value' => 'B'
            ],
            [
                'label' => 'make dep',
                'value' => 'C'
            ],
            [
                'label' => 'make xconfig',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '8-06',
        'question' => '下列哪⼀項指令會自動參考就有組態執行基本設定?',
        'options' => [
            [
                'label' => 'make menuconfig',
                'value' => 'A'
            ],
            [
                'label' => 'make config',
                'value' => 'B'
            ],
            [
                'label' => 'make xconfig',
                'value' => 'C'
            ],
            [
                'label' => 'make oldconfig',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-07',
        'question' => '若要自行重新編譯系統核⼼，並且將所需要的模組直接整合入核⼼，不需要用到下列哪⼀項指令?',
        'options' => [
            [
                'label' => 'make menuconfig',
                'value' => 'A'
            ],
            [
                'label' => 'make modules',
                'value' => 'B'
            ],
            [
                'label' => 'make kernel',
                'value' => 'C'
            ],
            [
                'label' => 'make bzImage',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-08',
        'question' => 'Modules 模組中使用 depmod 指令，有下列哪⼀項作用?',
        'options' => [
            [
                'label' => '優化模組，裝上指定的模組',
                'value' => 'A'
            ],
            [
                'label' => '處理模組間的相依性',
                'value' => 'B'
            ],
            [
                'label' => '清除已裝上模組',
                'value' => 'C'
            ],
            [
                'label' => '列出所有已裝上的指定模組',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-09',
        'question' => '關於 make menuconfig 組態設定的敘述，下列哪些正確?( 複選 )',
        'options' => [
            [
                'label' => '*代表內建到核⼼，M 代表為外掛模組',
                'value' => 'A'
            ],
            [
                'label' => '*代表為外掛模組，M 代表内建到核⼼',
                'value' => 'B'
            ],
            [
                'label' => '設備組態內建到核⼼，核⼼檔較為龐大',
                'value' => 'C'
            ],
            [
                'label' => '設備組態外掛模組，核⼼檔案較小',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ACD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '8-10',
        'question' => '如附圖所示， /etc/grub.conf 的開機設定檔内容，(hd0，2)代表下列哪⼀項意思?tital Fedora Core (2.4.22-1.2188.nptl)root (hd0，2)kernel /vmlinuz-2.4.22-1.2188.nptl ro root-LABEL =/ rhgbinitrd /initrd-2.4.22-1.2188.nptl.imgtital Debian GNU/Linux (2.4.18-bf2.4)root (hd0，0)kernel /boot/vmlinuz-2.4.18-bf2.4 root=/dev/hdal  rosavedefault',
        'options' => [
            [
                'label' => '第 2 個分割區',
                'value' => 'A'
            ],
            [
                'label' => '第 1 顆硬碟的第 2 個分割區',
                'value' => 'B'
            ],
            [
                'label' => '第 1 顆硬碟的第 3 個分割區',
                'value' => 'C'
            ],
            [
                'label' => '第 2 顆硬碟的第 1 個分割區',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-11',
        'question' => '讓使用者無須重新編譯 Kernel，即可⽀援新版硬體，是基於下列哪項設計理念?',
        'options' => [
            [
                'label' => 'Share Memory',
                'value' => 'A'
            ],
            [
                'label' => 'Swap Memory',
                'value' => 'B'
            ],
            [
                'label' => 'Kernel Memory Mapping',
                'value' => 'C'
            ],
            [
                'label' => 'Kernel Loadable Module',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-12',
        'question' => '若要自行重新編譯 Kernel，下列哪⼀項套件不必安裝?',
        'options' => [
            [
                'label' => 'gcc',
                'value' => 'A'
            ],
            [
                'label' => 'java',
                'value' => 'B'
            ],
            [
                'label' => 'make',
                'value' => 'C'
            ],
            [
                'label' => 'bison',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-13',
        'question' => '下列哪⼀項指令，可以顯示⽬前 Kernel 已經載入的模組?',
        'options' => [
            [
                'label' => 'Is -mod',
                'value' => 'A'
            ],
            [
                'label' => 'Is -module',
                'value' => 'B'
            ],
            [
                'label' => 'Ismod',
                'value' => 'C'
            ],
            [
                'label' => 'Ismodule',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-14',
        'question' => 'Fedora 系統的核⼼功能中，⽀援可依使用者需求自訂 CPU 時脈的運作方式，請問核⼼預設的 Default CPUFreq governor 為下列哪⼀項?',
        'options' => [
            [
                'label' => 'performance',
                'value' => 'A'
            ],
            [
                'label' => 'userspace',
                'value' => 'B'
            ],
            [
                'label' => 'conservative',
                'value' => 'C'
            ],
            [
                'label' => 'ondemand',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-15',
        'question' => '若要透過 make menuconfig 自行架構 Kernel 設定，必須安裝下列哪⼀項函式庫?',
        'options' => [
            [
                'label' => 'autoconf',
                'value' => 'A'
            ],
            [
                'label' => 'ncurses',
                'value' => 'B'
            ],
            [
                'label' => 'TCL/TK',
                'value' => 'C'
            ],
            [
                'label' => 'GTK',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-16',
        'question' => '下列哪些 Kernel 版本是屬於穩定版本?(複選)',
        'options' => [
            [
                'label' => '1.3.16-stable',
                'value' => 'A'
            ],
            [
                'label' => '2.6.1-prel',
                'value' => 'B'
            ],
            [
                'label' => '2.4.18-custom',
                'value' => 'C'
            ],
            [
                'label' => '1.2.3',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '8-17',
        'question' => '請問在正常設定中，大部分管理員會將編譯好的核⼼影像檔安裝到下列⼀項⽬錄?',
        'options' => [
            [
                'label' => '/',
                'value' => 'A'
            ],
            [
                'label' => '/root',
                'value' => 'B'
            ],
            [
                'label' => '/boot',
                'value' => 'C'
            ],
            [
                'label' => '/usr/src',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-18',
        'question' => '下列哪⼀項 Kernel 編譯順序是最佳的?clean',
        'options' => [
            [
                'label' => 'make configs ; make; make install',
                'value' => 'A'
            ],
            [
                'label' => 'make menuconfig; make dep; make bzimage modules',
                'value' => 'B'
            ],
            [
                'label' => './configure ; make dep ; make bzImage : make module s',
                'value' => 'C'
            ],
            [
                'label' => 'make oldconfig ; make dep ; make bzImage; make modu les; make',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-19',
        'question' => '在 Kernel 編譯過程中,若 make bzlmage 成功執行,請問新核⼼影像檔的路徑是下列哪⼀項?',
        'options' => [
            [
                'label' => '/boot/vmlinuz',
                'value' => 'A'
            ],
            [
                'label' => '/var/src/linux/bzImage',
                'value' => 'B'
            ],
            [
                'label' => '/var/src/linux/arch/i386/boot/vmlinuz',
                'value' => 'C'
            ],
            [
                'label' => '{編譯之核⼼路徑} /arch/x86/boot/bzImage',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-20',
        'question' => 'depmod –a 指令會更新下列哪⼀項檔案?',
        'options' => [
            [
                'label' => '/etc/modules.conf',
                'value' => 'A'
            ],
            [
                'label' => '/etc/conf.modules',
                'value' => 'B'
            ],
            [
                'label' => '/etc/modules.dep',
                'value' => 'C'
            ],
            [
                'label' => '/lib/modules/’uname -r’/modules.dep',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-21',
        'question' => '下列哪⼀項操作,可以獲得已載入 Kernel 之 foobar.o 模組的相關參數資訊?',
        'options' => [
            [
                'label' => 'grep foobar /var/modules/\'uname -1\'/modules.info',
                'value' => 'A'
            ],
            [
                'label' => 'modprobe --info foobar',
                'value' => 'B'
            ],
            [
                'label' => 'modinfo foobar',
                'value' => 'C'
            ],
            [
                'label' => 'modinfo foobar.o',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-22',
        'question' => 'Kernel 是位於下列哪⼀個⽬錄?',
        'options' => [
            [
                'label' => '/etc',
                'value' => 'A'
            ],
            [
                'label' => '/boot',
                'value' => 'B'
            ],
            [
                'label' => '/root',
                'value' => 'C'
            ],
            [
                'label' => '/usr/src',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'B',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-23',
        'question' => '在編譯 Kernel 時，下列哪些選項可以進入 Kernel 的功能選擇畫面? (複選)',
        'options' => [
            [
                'label' => 'make xconfig',
                'value' => 'A'
            ],
            [
                'label' => 'make oldconfig',
                'value' => 'B'
            ],
            [
                'label' => 'make newconfig',
                'value' => 'C'
            ],
            [
                'label' => 'make menuconfig',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '8-24',
        'question' => '若臨時要將某個模組載入 Kernel,應使用下列哪⼀項指令?',
        'options' => [
            [
                'label' => 'Ismod',
                'value' => 'A'
            ],
            [
                'label' => 'Rmmod',
                'value' => 'B'
            ],
            [
                'label' => 'Loadmod',
                'value' => 'C'
            ],
            [
                'label' => 'Insmod',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-25',
        'question' => '所謂核⼼是負責整部電腦的運作,它包含了下列哪些功能?( 複選 )',
        'options' => [
            [
                'label' => '記憶體管理',
                'value' => 'A'
            ],
            [
                'label' => '通訊協定',
                'value' => 'B'
            ],
            [
                'label' => '伺服器管理',
                'value' => 'C'
            ],
            [
                'label' => '硬體控制',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '8-26',
        'question' => '關於 Kernel 編譯的方法,下列敘述哪⼀項錯誤?',
        'options' => [
            [
                'label' => '可使用 make bzimage 進行編譯',
                'value' => 'A'
            ],
            [
                'label' => '亦可使用 make zImage 進行編譯',
                'value' => 'B'
            ],
            [
                'label' => '採用 bzlmage 無法⽀援較大容量的核⼼檔案',
                'value' => 'C'
            ],
            [
                'label' => '採用 bzlmage 開機速度較 zimage 慢',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'C',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-27',
        'question' => '使用可載入模組功能,它的好感包括了下列哪些?( 複選 )',
        'options' => [
            [
                'label' => '增加核⼼的容量',
                'value' => 'A'
            ],
            [
                'label' => '節省記憶體使用量',
                'value' => 'B'
            ],
            [
                'label' => '提高系統效能',
                'value' => 'C'
            ],
            [
                'label' => '不需要時可將該模組卸載',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'BD',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '8-28',
        'question' => '下列哪些指令可以調整 Kernel 的功能及⽀援硬體?( 複選 )',
        'options' => [
            [
                'label' => 'cd /usr/src/linux; make menuconfig',
                'value' => 'A'
            ],
            [
                'label' => 'cd /usr/src/linux; make xconfig',
                'value' => 'B'
            ],
            [
                'label' => 'cd /usr/src/linux; make config',
                'value' => 'C'
            ],
            [
                'label' => 'cd /usr/src/linux; make buildconfig',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'ABC',
        ],
        'type' => 'multiple'
    ],
    [
        'id' => '8-29',
        'question' => 'Kernel 原始碼的預設位置為下列哪⼀項⽬錄?',
        'options' => [
            [
                'label' => '/usr/src/linux',
                'value' => 'A'
            ],
            [
                'label' => '/usr/src/linux/src',
                'value' => 'B'
            ],
            [
                'label' => '/src/usr/linux',
                'value' => 'C'
            ],
            [
                'label' => '/usr/src/kernels/\'uname -r\'/',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'D',
        ],
        'type' => 'single'
    ],
    [
        'id' => '8-30',
        'question' => '當完成 Kernel 的功能設定後,可使用下列哪⼀項重新建構新的 Kernel ?',
        'options' => [
            [
                'label' => 'make clean bzImage modules modules_install',
                'value' => 'A'
            ],
            [
                'label' => 'make bzImage clean dep modules_install modules',
                'value' => 'B'
            ],
            [
                'label' => 'make mrproper bzImage modules modules_install',
                'value' => 'C'
            ],
            [
                'label' => 'make bzImage mrproper modules_install modules',
                'value' => 'D'
            ],
        ],
        'answer' => [
            'A',
        ],
        'type' => 'single'
    ],
];
?>
