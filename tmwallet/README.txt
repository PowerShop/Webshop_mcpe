ʤ�Ի����ᨡ������Ѵ�ŧ�Ҩҡʤ�Ի����Թ������� GTA Online �Ф�Ѻ (http://www.game-gta.com/board/index.php?topic=5701.0)

���ᨧ��͹�Ф�Ѻ
- ���ѧ����鷴�ͺ�Ф�Ѻ ������˹ٷ��ͧ�����


��ѡ��÷ӧҹ
�к�������к��ͧ TMTopup.Com �Ф�Ѻ ������к��Ѵ�ѵ��Թʴ�ѵ��ѵ� ����ԡ�ÿ�� !!
���������ҡ�͡���ʺѵ÷��˹�����䫵�ͧ TMTopup �����к��е�Ǩ�示ѵ���Ҷ١��ͧ������
�ҡ�١��ͧ �Թ㹺ѵèж١�ѡ��Һѭ����ҷ����ѤáѺ�ҧ TMTopup ������Ф�Ѻ
��������к� TMTopup �觢��������ѧ���䫵���Ҽ�ҹʤ�Ի����ᨡ���
�ҡ���ʤ�Ի���зӡ������ Point ���� �ʹ�Թ������ҹ�����Ţͧ��Ѥêԡ


�Ըա�õԴ���&��ҹ
1. ��ͧ����Ҫԡ http://www.tmtopup.com ��͹�Ф�Ѻ (��Ѥÿ�� ����դ���������)
�����Ѥõ�ͧ���Ţ�ѵû�ЪҪ��ͧ��ԧ��ҹ��

2. ��ǹ���Ŵ��� TMTopup API By Nst.zip ��� http://www.mediafire.com/?gdgljruk2tirpoa

3. ᵡ��� TMTopup API By Nst.zip ����ǹ���Ŵ�Ҩ������ 3 ��� ��� AES.php, Rijndael.php, tmtopup_api_pp.php

4. �Դ��� tmtopup_api_pp.php ����� (������������Դ����...�������ҹ��� Notepad, EditPlus)

5. �Ѵ�����䢢����ŵ�ҧ� ���ç�Ѻ���䫵���Ҵѧ���
# ------------------------------------- Config Begin ------------------------------------- #
// ------------------------------------------------------------------------------------------------
/* MySQL Config | Begin */
// Hostname �ͧ MySQL Server
$_CONFIG['mysql']['dbhost'] = 'localhost';

// Username ������������� MySQL Server
$_CONFIG['mysql']['dbuser'] = 'username';

// Password ������������� MySQL Server
$_CONFIG['mysql']['dbpw'] = 'password';

// ���Ͱҹ�����ŷ����Ҩ���� Point ���
$_CONFIG['mysql']['dbname'] = 'gta';

// ���͵��ҧ�����Ҩ���� Point ��� ������ҧ : member
$_CONFIG['mysql']['tbname'] = 'member';

// ���� field �������ҧ Username
$_CONFIG['mysql']['field_username'] = 'username';

// ���� field �����㹡���� Point �ҡ�������Թ
$_CONFIG['TMN']['point_field_name'] = 'point';
/* MySQL Config | End */
// ------------------------------------------------------------------------------------------------


// ------------------------------------------------------------------------------------------------
/* �ӹǹ Point �������Ѻ���������Թ��Ҥҵ�ҧ� | Begin */
$_CONFIG['TMN'][50]['point'] = 500;	// Point ������Ѻ���������Թ�Ҥ� 50 �ҷ
$_CONFIG['TMN'][90]['point'] = 900;	// Point ������Ѻ���������Թ�Ҥ� 90 �ҷ
$_CONFIG['TMN'][150]['point'] = 1500;	// Point ������Ѻ���������Թ�Ҥ� 150 �ҷ
$_CONFIG['TMN'][300]['point'] = 3000;	// Point ������Ѻ���������Թ�Ҥ� 300 �ҷ
$_CONFIG['TMN'][500]['point'] = 5000;	// Point ������Ѻ���������Թ�Ҥ� 500 �ҷ
$_CONFIG['TMN'][1000]['point'] = 10000;	// Point ������Ѻ���������Թ�Ҥ� 1,000 �ҷ
/* �ӹǹ Point �������Ѻ���������Թ��Ҥҵ�ҧ� | End */
// ------------------------------------------------------------------------------------------------


// ��˹� API Passkey ����Ѻ�������͡Ѻ�к� TMTopup
define('API_PASSKEY', 'NSTPasskey01');

# -------------------------------------- Config End -------------------------------------- #



6. �Ѿ��Ŵ��� PHP ��� 3 ��� ��� Web Server �ͧ�س

7. Login ������ tmtopup.com ���͡���� "��駤�ҡ������Թ"

8. ��駤�� Ref1 , Ref2 , API URL ��� API Passkey �ѧ���
- API URL �к� URL �ͧ��� tmtopup_api_pp.php ����Ѿ��Ŵ���㹢�� 6 �� http://www.thaicreate.com/tmtopup/tmtopup_api.php
- API Passkey �к� API_PASSKEY ����˹�������� tmtopup_api_pp.php 㹢�ͷ�� 3 �� NSTPasskey01
- Ref1 ��˹�����١������ Username �ͧ���䫵� �������ҧ��蹷����ҧ�֧�����Ҫԡ��ҹ�������Թ �����Թ��Ҩ�����觹��㹡����ҧ�ԧ��� Point
- Ref2 ������١���������á��� �� ������� ���� Email ���� �������Ѿ��Դ���

9. �������� "�Ҿ����ѭ��" �����駤�����Թ�����١��������ѹ�� ���ͨз� iframe ��з��˹�����䫵��ҹ���������Ѻ

10. ����õԴ��� ���ͺ��÷ӧҹ




By : www.nstinteractive.com