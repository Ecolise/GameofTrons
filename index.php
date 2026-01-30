<?php
/**
 * Game of Trons - 2026 Master Portal
 * Version: 4.6 "The Synchronized Empire" 
 * UPDATES: Tokenomics unified with Whitepaper v4.0.
 */

$activeGenerals = "14," . rand(200, 999);
$prizePool = rand(2, 5) . "." . rand(1, 9) . "M TRX";
$saleProgress = rand(65, 82);
?>
<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game of Trons | Sovereign AI Cognitive Empire</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Outfit:wght@400;900&display=swap" rel="stylesheet">
    <style>
        :root { --tron-red: #ff0013; }
        body { font-family: 'Space Grotesk', sans-serif; background-color: #050505; color: #fff; scroll-behavior: smooth; }
        .hero-font { font-family: 'Outfit', sans-serif; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.05); }
        .glow-red { box-shadow: 0 0 30px rgba(255, 0, 19, 0.15); }
        .red-gradient-text { background: linear-gradient(to right, #ff0013, #ff4d4d); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .war-log-entry { animation: slideIn 0.3s ease-out; }
        @keyframes slideIn { from { opacity: 0; transform: translateX(-10px); } to { opacity: 1; transform: translateX(0); } }
    </style>
</head>
<body class="bg-[radial-gradient(circle_at_2px_2px,rgba(255,0,0,0.05)_1px,transparent_0)] bg-[size:40px_40px]">

    <nav class="fixed w-full z-50 top-0 glass border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-red-600 rounded-lg flex items-center justify-center font-black text-white">G</div>
                <span class="text-xl font-bold uppercase tracking-tighter text-white">Game of <span class="text-red-600">Trons</span></span>
            </div>
            <div class="hidden lg:flex space-x-6 text-[9px] uppercase tracking-[0.2em] font-bold text-gray-400">
                <a href="#sale" class="hover:text-red-500 transition">Sale</a>
                <a href="#war-room" class="hover:text-red-500 transition">War Room</a>
                <a href="#about" class="hover:text-red-500 transition">Protocol</a>
                <a href="whitepaper.php" class="text-red-500 hover:text-white transition font-black">Whitepaper</a>
                <a href="#tokenomics" class="hover:text-red-500 transition">Economics</a>
                <a href="#team" class="hover:text-red-500 transition">Council</a>
            </div>
            <button class="bg-white text-black px-5 py-2 rounded-full text-[10px] font-black hover:bg-red-600 hover:text-white transition-all">CONNECT WALLET</button>
        </div>
    </nav>

    <section class="pt-40 pb-20 px-6 text-center relative overflow-hidden">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-red-600/10 rounded-full blur-[120px] pointer-events-none"></div>
        <h1 class="hero-font text-7xl md:text-9xl font-black tracking-tighter leading-none mb-6 text-white uppercase">RULE THE<br><span class="red-gradient-text">NETWORK.</span></h1>
        
        <div class="max-w-3xl mx-auto mb-10">
            <p class="text-white text-lg md:text-2xl font-bold uppercase tracking-[0.2em] mb-4 hero-font">A Sovereign AI Cognitive Empire</p>
            <p class="text-gray-400 text-xs md:text-sm uppercase tracking-[0.3em] leading-relaxed font-medium">
                Autonomous Intelligence <span class="text-red-600 px-2">|</span> 
                DePIN Resilience <span class="text-red-600 px-2">|</span> 
                Immutable World-State
            </p>
        </div>

        <div class="flex justify-center gap-4">
            <a href="#sale" class="bg-red-600 text-white px-8 py-4 rounded-xl font-black text-xs uppercase tracking-widest glow-red hover:scale-105 transition-transform">Enter the War Room</a>
            <a href="whitepaper.php" class="glass px-8 py-4 rounded-xl font-black text-xs uppercase tracking-widest hover:bg-white/10 transition-all text-white border border-red-600/30">Read Whitepaper</a>
        </div>
    </section>

    <section id="war-room" class="py-12 px-6">
        <div class="max-w-5xl mx-auto glass rounded-3xl overflow-hidden border border-red-600/20">
            <div class="bg-red-600/10 px-6 py-3 border-b border-red-600/20 flex justify-between items-center">
                <span class="text-[10px] font-black uppercase tracking-[0.3em] text-red-500 flex items-center gap-2">
                    <span class="w-2 h-2 bg-red-600 rounded-full animate-pulse"></span> Live Agentic Warfare Feed
                </span>
                <span class="text-[9px] text-gray-500 font-bold uppercase">BTFS Node v4.0.1 Online</span>
            </div>
            <div id="war-logs" class="h-64 p-6 overflow-y-auto font-mono text-[11px] space-y-2 bg-black/60">
                </div>
        </div>
    </section>

    <section id="sale" class="py-12 px-6">
        <div class="max-w-4xl mx-auto glass p-8 rounded-[2rem] border-red-600/20 glow-red">
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <h2 class="text-2xl font-black uppercase hero-font mb-4 tracking-tighter text-white">Sale Phase I: The Siege</h2>
                    <div class="space-y-4">
                        <div class="flex justify-between text-[10px] font-bold uppercase tracking-widest text-red-500">
                            <span>Current Progress: <?php echo $saleProgress; ?>%</span>
                            <span>Hard Cap: 20M TRX</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                            <div class="bg-red-600 h-full transition-all duration-1000" style="width: <?php echo $saleProgress; ?>%"></div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 text-center">
                    <div class="p-4 bg-black/40 rounded-xl border border-white/5">
                        <p class="text-[9px] text-gray-500 uppercase">Prize Pool</p>
                        <p class="text-xl font-bold text-white"><?php echo $prizePool; ?></p>
                    </div>
                    <div class="p-4 bg-black/40 rounded-xl border border-white/5">
                        <p class="text-[9px] text-gray-500 uppercase">AI Generals</p>
                        <p class="text-xl font-bold text-white"><?php echo $activeGenerals; ?></p>
                    </div>
                    <button class="col-span-2 bg-red-600 py-4 rounded-xl font-black text-xs uppercase tracking-[0.2em] hover:bg-white hover:text-red-600 transition-all text-white">Acquire $GOT Tokens</button>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-24 px-6 bg-red-600/[0.01]">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl font-black hero-font uppercase mb-8 tracking-tighter text-white">The <span class="text-red-600">Cognitive</span> Thesis</h2>
                    <div class="space-y-6 text-gray-400 text-sm leading-relaxed">
                        <p><strong class="text-white uppercase tracking-widest">Problem:</strong> Traditional Web3 gaming requires manual grinding. Human decision-making is too slow for the high-frequency volatility of the TRON DeFi ecosystem.</p>
                        <p><strong class="text-white uppercase tracking-widest">Solution:</strong> Game of Trons transitions to the Agentic Era. We fuse Allora Machine Learning with BTFS 4.0 DePIN sharding for 24/7 autonomous theater of war.</p>
                        <p class="pt-4"><a href="whitepaper.php" class="text-red-500 font-black uppercase text-[10px] tracking-[0.3em] border-b-2 border-red-600 pb-2 hover:text-white transition-all">Explore the Technical Architecture →</a></p>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="glass p-6 rounded-2xl border-l-4 border-red-600">
                        <h4 class="text-white font-black uppercase text-xs mb-2 tracking-widest">Autonomous Intelligence</h4>
                        <p class="text-[11px] text-gray-500 uppercase font-bold">Agents learn and evolve via the Allora Network.</p>
                    </div>
                    <div class="glass p-6 rounded-2xl border-l-4 border-blue-600">
                        <h4 class="text-white font-black uppercase text-xs mb-2 tracking-widest">DePIN Resilience</h4>
                        <p class="text-[11px] text-gray-500 uppercase font-bold">World-state data sharded across BTFS 4.0 nodes.</p>
                    </div>
                    <div class="glass p-6 rounded-2xl border-l-4 border-yellow-600">
                        <h4 class="text-white font-black uppercase text-xs mb-2 tracking-widest">Liquidity Conquest</h4>
                        <p class="text-[11px] text-gray-500 uppercase font-bold">Real value capture from TRX protocol yields.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="agents" class="py-24 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8">
            <div class="glass p-8 rounded-3xl border-l-2 border-red-600">
                <h4 class="text-xl font-bold mb-4 uppercase text-white">Allora AI Generals</h4>
                <p class="text-gray-400 text-xs leading-relaxed font-medium">Autonomous commanders executing 24/7 predictive strategies via the Allora network.</p>
            </div>
            <div class="glass p-8 rounded-3xl border-l-2 border-blue-600">
                <h4 class="text-xl font-bold mb-4 uppercase text-white">BTFS 4.0 Sharding</h4>
                <p class="text-gray-400 text-xs leading-relaxed font-medium">Decentralized DePIN layer ensuring every conquest is permanently etched across TRON.</p>
            </div>
            <div class="glass p-8 rounded-3xl border-l-2 border-yellow-600">
                <h4 class="text-xl font-bold mb-4 uppercase text-white">Protocol Conquest</h4>
                <p class="text-gray-400 text-xs leading-relaxed font-medium">Occupy SunSwap and JustLend pools to generate passive $GOT yield for your faction.</p>
            </div>
        </div>
    </section>

    <section id="tokenomics" class="py-24 px-6 bg-red-600/[0.02] border-y border-white/5 text-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-black hero-font text-center uppercase mb-16 tracking-tighter">Kingdom Economics</h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-4">
                    <div class="flex justify-between p-5 glass rounded-xl border-white/10 hover:border-red-600 transition-all">
                        <span class="font-bold text-sm uppercase">The Kingdoms (Ecosystem)</span>
                        <span class="text-red-500 font-black text-xl">40%</span>
                    </div>
                    <div class="flex justify-between p-5 glass rounded-xl border-white/10 hover:border-red-600 transition-all">
                        <span class="font-bold text-sm uppercase">The Iron Bank (Public Sale/LP)</span>
                        <span class="text-red-500 font-black text-xl">30%</span>
                    </div>
                    <div class="flex justify-between p-5 glass rounded-xl border-white/10 hover:border-red-600 transition-all">
                        <span class="font-bold text-sm uppercase">The Small Council (Team/Vested)</span>
                        <span class="text-red-500 font-black text-xl">15%</span>
                    </div>
                    <div class="flex justify-between p-5 glass rounded-xl border-white/10 hover:border-red-600 transition-all">
                        <span class="font-bold text-sm uppercase">Liquidity Citadel (Treasury)</span>
                        <span class="text-red-500 font-black text-xl">15%</span>
                    </div>
                </div>
                <div class="text-center">
                    <div class="glass p-10 rounded-full w-80 h-80 mx-auto flex flex-col items-center justify-center border-dashed border-red-600/30 glow-red">
                        <span class="text-5xl font-black tracking-tighter text-white">1,000M</span>
                        <span class="text-red-500 font-bold tracking-[0.3em] uppercase text-xs mt-2">$GOT Supply</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="py-24 px-6">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center text-4xl font-black hero-font uppercase mb-16 underline decoration-red-600 tracking-tighter text-white">The Small Council</h2>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center text-white">
                <?php
                $team = [['Lord Stark-Net', 'Founder'], ['The High Septon', 'AI Lead'], ['Master of Coin', 'Economy'], ['Hand of the King', 'Ops']];
                foreach ($team as $m):
                ?>
                <div class="group">
                    <div class="w-24 h-24 mx-auto bg-white/5 rounded-2xl border border-white/10 mb-4 flex items-center justify-center grayscale group-hover:grayscale-0 transition-all border-b-red-600 border-b-4 glow-red">
                        <img src="https://api.dicebear.com/7.x/bottts/svg?seed=<?php echo $m[0]; ?>" class="w-16 h-16">
                    </div>
                    <p class="font-black uppercase text-[12px] text-white"><?php echo $m[0]; ?></p>
                    <p class="text-[9px] text-red-500 font-bold uppercase mt-1"><?php echo $m[1]; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer class="py-16 border-t border-white/5 text-center bg-black/40">
        <div class="flex items-center justify-center gap-2 mb-8">
            <div class="w-6 h-6 bg-red-600 rounded flex items-center justify-center font-black text-[10px] text-white">G</div>
            <span class="text-sm font-bold uppercase tracking-tighter text-white">Game of <span class="text-red-600">Trons</span></span>
        </div>
        
        <div class="flex justify-center gap-10 text-[10px] font-bold uppercase tracking-[0.3em] text-gray-400 mb-10">
            <a href="https://twitter.com/gameoftrons" target="_blank" class="hover:text-red-500 transition-colors">Twitter (X)</a>
            <a href="whitepaper.php" class="hover:text-red-500 transition-colors">Whitepaper</a>
            <a href="https://github.com/gameoftrons" target="_blank" class="hover:text-red-500 transition-colors">GitHub</a>
        </div>

        <p class="text-gray-500 text-[9px] uppercase tracking-[0.4em] mb-4 font-bold">Game of Trons &copy; 2026</p>
        <p class="text-[9px] text-gray-700 max-w-md mx-auto px-6 uppercase tracking-widest font-bold leading-relaxed">
            A DECENTRALIZED PROTOCOL. NO CENTRAL AUTHORITY GOVERNS THE IRON THRONE.
        </p>
    </footer>

    <script>
        const logs = [
            "AGENT-041 deployed to SunSwap: CITADEL-ALPHA.",
            "Predictive analysis complete: SunPump volatility @ 84%.",
            "Allora Inference: Capture yield from Faction-Beta treasury.",
            "BTFS Sharding: Block #14022 persistent across 4,200 nodes.",
            "Yield harvested: 450 TRX funneled to GOT-War-Chest.",
            "Defense protocol active: Fending off rival swarm at JustLend.",
            "AI General Stark-Net: Increasing Cognitive Quota by 12%.",
            "New Decree: Faction-Gamma has declared war on Liquidity-Sector-4."
        ];

        const logContainer = document.getElementById('war-logs');

        function addLog() {
            const entry = document.createElement('div');
            entry.className = 'war-log-entry text-gray-400';
            const time = new Date().toLocaleTimeString();
            const message = logs[Math.floor(Math.random() * logs.length)];
            entry.innerHTML = `<span class="text-red-600">[${time}]</span> ${message}`;
            logContainer.prepend(entry);
            if (logContainer.children.length > 12) logContainer.removeChild(logContainer.lastChild);
        }

        setInterval(addLog, 2500);
        addLog();
    </script>
</body>
</html>
