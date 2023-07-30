// _"Mending jadi pangsit aja aku sefatal apapun kesalahannya dengan lama waktu yang sudah kalian lalui bersama akan membuat dia selalu mendapat pengampunan darimu karena besarnya rasa sayang dan cinta yang kamu miliki untuknya sedang pendatang baru sepertiku bisa apa selain menemani resah dan sedihmu selain itu dia juga cukup tahu diri untuk sadar posisi"_ ~LINTX
const express = require("express");
const app = express();
const morgan = require("morgan");

const PORT = process.env.PORT || 5000;

app.use(morgan('tiny'));
app.get("/", async (req, res) => {
	const [reqHost, reqPort] = req.headers.host.split(':');
	
	if (reqPort == PORT) {
		return res.redirect('https://panel.warceuproject.dev');
	}
	
	res.redirect('/sysinfo');
});
app.get("/sysinfo", async (req, res) => {
	const systemInfo = await require("./sys")();
	const data = {
		code: "429",
		message: "Too Many Request",
		data: {
			requires: [
				"putih",
				"tinggi minimal 180++",
				"spek ustad",
				"kalau bisa ganteng",
				"gaji minimal 5 jt",
				"penyayang",
				"setia",
				"tidak merokok",
				"minimal aerox/crf",
				"tidak sasimo",
				"bad boy",
				"pecinta kucing",
				"perut kotak-kotak"
			]
		},
		headers: {
			"x-requested-by": "wanita/women"
		},
		result: "Terkadang hal indah seperti kamu tercipta bukan untuk dimiliki, disayang, diharapkan, atau bahkan dicintai sejauh mata ini masih dapat memandang adalah rasa syukur tersendiri dengan mengingat posisi dan cukup kagumi dalam diam tanpa harus menaruh perasaan yang begitu dalam"
	};
	
	res.end(JSON.stringify(data, null, 4));
});
app.listen(PORT, () => {
	console.log('\x1b[92mApp listen on port: %d\x1b[0m', PORT);
});
