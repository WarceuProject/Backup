const cp = require("child_process");
const getPortsList = () => {
    const ports = cp.execSync(`nmap localhost | grep 'open' | awk '{ print $1 }' | awk '{print ($0+0)}' | sort | uniq | sed -z 's/\\n/ /g;s/ $/\\n/'`);

    return ports.toString().trim().split(" ").map(port => port * 1);
}
const randPort = (len = 2) => {
	let port;
	
	while (port) {
		
	}
}
