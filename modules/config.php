<?php
date_default_timezone_set("Asia/Tehran");

$Channel = [
    "V2rayNGn",
    "free4allVPN",
    "PrivateVPNs",
    "DirectVPN",
    "ProxyFn",
    "v2ray_outlineir",
    "NetAccount",
    "oneclickvpnkeys",
    "daorzadannet",
    "Outline_Vpn",
    "vpn_xw",
    "prrofile_purple",
    "ShadowSocks_s",
    "azadi_az_inja_migzare",
    "WomanLifeFreedomVPN",
    "internet4iran",
    "LegenderY_Servers",
    "vpnfail_v2ray",
    "UnlimitedDev",
    "vmessorg",
    "v2rayNG_Matsuri",
    "v2rayngvpn",
    "vpn_ioss",
    "v2freevpn",
    "customv2ray",
    "FalconPolV2rayNG",
    "Jeyksatan",
    "hassan_saboorii",
    "v2rayvmess",
    "v2rayNGNeT",
    "server01012",
    "ShadowProxy66",
    "ipV2Ray",
    "kiava",
    "Helix_Servers",
    "PAINB0Y",
    "VpnProSec",
    "VlessConfig",
    "NIM_VPN_ir",
    "hashmakvpn",
    "X_Her0",
    "Napsternetvirani",
    "iran_ray",
    "INIT1984",
    "EXOGAMERS",
    "ServerNett",
    "Pinkpotatocloud",
    "CloudCityy",
    "DarkVPNpro",
    "Qv2raychannel",
    "xrayzxn",
    "shopingv2ray",
    "xrayproxy",
    "Proxy_PJ",
    "V2rayng_Fast",
    "v2ray_swhil",
    "LoRd_uL4mo",
    "proxyymeliii",
    "MsV2ray",
    "free_v2rayy",
    "v2ray1_ng",
    "vless_vmess",
    "MTConfig",
    "lagvpn13",
    "v2rayNG_VPNN",
    "vmess_vless_v2rayng",
    "FreeIranT",
    "Cov2ray",
    "V2RayTz",
    "VmessProtocol",
    "MehradLearn",
    "SafeNet_Server",
    "ovpn2",
    "lrnbymaa",
    "vpn_tehran",
    "OutlineVpnOfficial",
    "v2ray_vpn_ir",
    "v2_team",
    "proxy_kafee",
    "ConfigsHUB",
    "AlienVPN402",
];
$Types = [
    "V2rayNGn" => ["vmess", "vless"],
    "free4allVPN" => ["vmess", "ss"],
    "PrivateVPNs" => ["trojan"],
    "DirectVPN" => ["trojan"],
    "ProxyFn" => ["vless"],
    "v2ray_outlineir" => ["vmess"],
    "NetAccount" => ["trojan"],
    "oneclickvpnkeys" => ["vmess", "trojan"],
    "daorzadannet" => ["vmess", "vless"],
    "Outline_Vpn" => ["vless"],
    "vpn_xw" => ["vless"],
    "prrofile_purple" => ["vmess", "vless"],
    "ShadowSocks_s" => ["vless"],
    "azadi_az_inja_migzare" => ["vmess", "vless", "ss"],
    "WomanLifeFreedomVPN" => ["vless"],
    "internet4iran" => ["vless"],
    "customv2ray" => ["vmess", "vless"],
    "LegenderY_Servers" => ["vless"],
    "vpnfail_v2ray" => ["vmess"],
    "UnlimitedDev" => ["vless"],
    "vmessorg" => ["vmess", "vless"],
    "v2rayNG_Matsuri" => ["vless"],
    "v2rayngvpn" => ["vless"],
    "vpn_ioss" => ["vmess"],
    "v2freevpn" => ["vless"],
    "customv2ray" => ["vmess", "vless"],
    "FalconPolV2rayNG" => ["vless"],
    "Jeyksatan" => ["vmess", "trojan"],
    "hassan_saboorii" => ["vmess", "vless"],
    "v2rayvmess" => ["vmess", "vless"],
    "v2rayNGNeT" => ["vless"],
    "server01012" => ["vmess"],
    "ShadowProxy66" => ["vmess", "vless"],
    "ipV2Ray" => ["vless"],
    "kiava" => ["vless"],
    "Helix_Servers" => ["vless"],
    "PAINB0Y" => ["vless"],
    "VpnProSec" => ["vless"],
    "VlessConfig" => ["vless"],
    "NIM_VPN_ir" => ["vless"],
    "hashmakvpn" => ["vmess"],
    "X_Her0" => ["vless"],
    "Napsternetvirani" => ["vmess"],
    "iran_ray" => ["vless"],
    "INIT1984" => ["vless"],
    "EXOGAMERS" => ["vless"],
    "ServerNett" => ["vless"],
    "Pinkpotatocloud" => ["vmess", "vless"],
    "CloudCityy" => ["vless"],
    "DarkVPNpro" => ["vless"],
    "Qv2raychannel" => ["vless"],
    "xrayzxn" => ["vmess", "vless", "trojan", "ss"],
    "shopingv2ray" => ["vless"],
    "xrayproxy" => ["vless"],
    "Proxy_PJ" => ["vmess", "vless"],
    "V2rayng_Fast" => ["vmess"],
    "v2ray_swhil" => ["vmess", "vless", "trojan"],
    "LoRd_uL4mo" => ["vmess", "vless"],
    "proxyymeliii" => ["vmess", "vless", "trojan", "ss"],
    "MsV2ray" => ["vless"],
    "free_v2rayy" => ["vmess", "vless"],
    "v2ray1_ng" => ["vmess", "vless", "trojan"],
    "vless_vmess" => ["vmess", "vless"],
    "MTConfig" => ["vmess", "vless", "ss"],
    "lagvpn13" => ["vless"],
    "v2rayNG_VPNN" => ["vless"],
    "vmess_vless_v2rayng" => ["vmess", "vless", "trojan", "ss"],
    "FreeIranT" => ["vless"],
    "Cov2ray" => ["vmess"],
    "V2RayTz" => ["vless", "trojan"],
    "VmessProtocol" => ["vless", "trojan", "ss"],
    "MehradLearn" => ["vless"],
    "SafeNet_Server" => ["vmess", "vless"],
    "ovpn2" => ["vmess", "vless", "trojan"],
    "lrnbymaa" => ["vless"],
    "vpn_tehran" => ["vmess", "vless", "trojan"],
    "OutlineVpnOfficial" => ["ss"],
    "v2ray_vpn_ir" => ["vmess", "vless", "trojan"],
    "v2_team" => ["vmess", "vless"],
    "proxy_kafee" => ["vless"],
    "ConfigsHUB" => ["vmess", "vless", "trojan"],
    "AlienVPN402" => ["ss"]
];

?>
