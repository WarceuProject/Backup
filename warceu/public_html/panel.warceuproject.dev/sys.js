const sysInfo = require("systeminformation");

async function SystemInfo() {
    return {
        osInfo: await sysInfo.osInfo(),
        cpu: await sysInfo.cpu(),
        networkInterfaces: await sysInfo.networkInterfaces(),
        message: `_"Mending jadi pangsit aja aku sefatal apapun kesalahannya dengan lama waktu yang sudah kalian lalui bersama akan membuat dia selalu mendapat pengampunan darimu karena besarnya rasa sayang dan cinta yang kamu miliki untuknya sedang pendatang baru sepertiku bisa apa selain menemani resah dan sedihmu selain itu dia juga cukup tahu diri untuk sadar posisi"_ ~LINTX`
    };
}

module.exports = SystemInfo;
