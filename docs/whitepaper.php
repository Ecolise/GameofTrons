<?php
/**
 * Game of Trons - 2026 Documentation 
 * Whitepaper v4.0: The Cognitive Empire
 * FORMAT: FULL 14-SECTION INSTITUTIONAL MASTER DOCUMENT
 * REVISION: EXPANDED TECHNICAL APPENDIX (SECTION 14) | TOTAL PRESERVATION
 **/
?>
<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institutional Whitepaper | Game of Trons v4.0</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Outfit:wght@400;900&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root { --tron-red: #ff0013; --tron-blue: #00f2ff; --slate-900: #030303; }
        body { font-family: 'Space Grotesk', sans-serif; background-color: var(--slate-900); color: #b5b5b5; line-height: 1.8; }
        .glass { background: rgba(255, 255, 255, 0.02); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.05); }
        .sidebar-link { transition: all 0.3s; border-left: 2px solid transparent; text-decoration: none; font-size: 10px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.15em; color: #666; }
        .sidebar-link:hover, .sidebar-link.active { border-left-color: var(--tron-red); color: white; background: rgba(255, 0, 19, 0.05); }
        h1, h2, h3, h4 { color: white; font-family: 'Outfit', sans-serif; text-transform: uppercase; font-weight: 900; letter-spacing: -0.02em; }
        section { border-bottom: 1px solid rgba(255, 255, 255, 0.03); padding: 120px 0; }
        .math-block { background: #000; padding: 50px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.08); margin: 40px 0; font-family: 'JetBrains Mono', monospace; box-shadow: inset 0 0 30px rgba(255,0,0,0.05); }
        .tech-label { font-size: 10px; font-weight: 900; color: var(--tron-red); text-transform: uppercase; letter-spacing: 0.4em; margin-bottom: 1.5rem; display: block; }
        strong { color: #fff; font-weight: 700; }
        .clause { margin-bottom: 2.5rem; border-left: 1px solid rgba(255,0,0,0.2); padding-left: 30px; }
        .indent-p { margin-left: 20px; font-size: 0.95rem; margin-top: 10px; }
        .phase-card { background: rgba(255,255,255,0.01); padding: 40px; border: 1px solid rgba(255,255,255,0.05); border-radius: 8px; margin-top: 30px; }
        .phase-title { color: var(--tron-red); font-size: 1.25rem; font-weight: 900; margin-bottom: 1rem; border-bottom: 1px solid rgba(255,0,0,0.2); display: inline-block; padding-bottom: 4px; }
        .variable-card { background: rgba(255,0,0,0.05); padding: 20px; border-radius: 8px; border: 1px solid rgba(255,0,0,0.1); }
    </style>
</head>
<body class="bg-[fixed_radial-gradient(circle_at_2px_2px,rgba(255,0,0,0.03)_1px,transparent_0)] bg-[size:60px_60px]">

    <div class="flex flex-col lg:flex-row min-h-screen">
        
        <aside class="lg:w-80 lg:fixed lg:h-screen p-10 border-r border-white/5 bg-black/95 z-50 overflow-y-auto">
            <div class="flex items-center gap-3 mb-16">
                <div class="w-10 h-10 bg-red-600 rounded-xl flex items-center justify-center font-black text-white shadow-2xl shadow-red-600/30">GoT</div>
                <div class="flex flex-col">
                    <span class="text-[11px] font-black uppercase tracking-widest text-white leading-none">Cognitive Empire</span>
                    <span class="text-[8px] text-red-600 font-bold uppercase tracking-widest mt-1">v4.0.26 Master Codex</span>
                </div>
            </div>
            
            <nav class="space-y-1">
                <a href="#abstract" class="sidebar-link block p-3">01. Abstract</a>
                <a href="#problem" class="sidebar-link block p-3">02. Market Inefficiency</a>
                <a href="#agentic-layer" class="sidebar-link block p-3">03. Neural-Seed Core</a>
                <a href="#depin-layer" class="sidebar-link block p-3">04. DePIN Persistence</a>
                <a href="#economics" class="sidebar-link block p-3">05. Macro-Tokenomics</a>
                <a href="#conquest" class="sidebar-link block p-3">06. Yield Conquest Logic</a>
                <a href="#roadmap" class="sidebar-link block p-3">07. Deployment Roadmap</a>
                <a href="#math-proof" class="sidebar-link block p-3">08. Proof of Conquest</a>
                <a href="#btfs-sharding" class="sidebar-link block p-3">09. BTFS Protocol</a>
                <a href="#governance" class="sidebar-link block p-3">10. Factional Politics</a>
                <a href="#security" class="sidebar-link block p-3">11. Security & Risk</a>
                <a href="#ux-viz" class="sidebar-link block p-3">12. War Room UX</a>
                <a href="#sustainability" class="sidebar-link block p-3">13. Sustainability</a>
                <a href="#appendix" class="sidebar-link block p-3">14. Glossary & Appendix</a>
            </nav>
        </aside>

        <main class="lg:ml-80 flex-1 px-8 lg:px-32">
            
            <header class="py-40">
                <span class="tech-label">Sovereign Specification v4.0.26</span>
                <h1 class="text-7xl lg:text-[10rem] mb-12 tracking-tighter uppercase leading-[0.8]">The<br>Cognitive<br><span class="text-red-600">Empire.</span></h1>
            </header>

            <section id="abstract">
                <h2 class="text-5xl mb-12 tracking-tighter">01. Abstract</h2>
                <div class="clause">
                    <strong>Autonomous Sovereign Protocol:</strong>
                    <p class="indent-p">Game of Trons is a decentralized sovereign entity where AI agents compete to maximize the wealth of their human factions. By merging decentralized machine learning (Allora) with TRON’s high-throughput infrastructure, the protocol establishes a sub-second reactive financial layer that operates autonomously. Unlike traditional DeFi, GoT removes human latency, creating a perpetual conquest engine powered by agentic intelligence.</p>
                </div>
            </section>

            <section id="problem">
                <h2 class="text-5xl mb-12 tracking-tighter">02. Market Inefficiency</h2>
                <div class="clause">
                    <strong>The Human Latency Bottleneck:</strong>
                    <p class="indent-p">Modern DeFi operates at velocities that exceed human cognitive capacity. The delay between a market signal and human execution—the "Human Tax"—accounts for significant yield erosion (approx. 15%). GoT targets this by replacing manual intent with sub-second agentic execution on SunSwap V3 and JustLend, ensuring that liquidity citadels are occupied based on purely mathematical signals.</p>
                </div>
            </section>

            <section id="agentic-layer">
                <h2 class="text-5xl mb-12 tracking-tighter">03. Neural-Seed Agentic Layer</h2>
                <div class="clause">
                    <strong>Cognitive Identity Architecture:</strong>
                    <p class="indent-p">The Neural-Seed (TRC-721) serves as the sovereign identity of each AI General. These seeds hold scoped session keys, enabling autonomous interaction with the TRON blockchain. As agents successfully navigate yield conquests, their experience is recorded on-chain, evolving their Allora-backed inference models and increasing their merit-based governance weight.</p>
                </div>
            </section>

            <section id="depin-layer">
                <h2 class="text-5xl mb-12 tracking-tighter">04. DePIN Persistence</h2>
                <div class="clause">
                    <strong>BitTorrent File System (BTFS) Integration:</strong>
                    <p class="indent-p">To ensure total censorship resistance, the entire world-state—assets, borders, and history—is hosted on BTFS 4.0. By sharding the game state across thousands of decentralized nodes, GoT exists as a permanent digital reality independent of any centralized server infrastructure.</p>
                </div>
            </section>

            <section id="economics">
                <h2 class="text-5xl mb-12 tracking-tighter">05. Macro-Tokenomics</h2>
                <div class="math-block">
                    <h4 class="text-white mb-4 uppercase text-xs font-black">Supply Distribution Protocol</h4>
                    <p class="text-sm">Supply: 1,000,000,000 $GOT. 40% Agentic Yield. 30% Iron Bank Liquidity. 15% Small Council. 15% Imperial Treasury. Features a 2% burn-on-transaction to maintain deflationary pressure during high-velocity raids.</p>
                </div>
            </section>

            <section id="conquest">
                <h2 class="text-5xl mb-12 tracking-tighter">06. Yield Conquest Logic</h2>
                <div class="math-block">
                    <p class="text-center text-4xl text-white">$$Y_{capture} = \sum_{i=1}^{n} (L_i \cdot \alpha_i) \cdot \frac{C_q}{C_{total}}$$</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mt-8">
                    <div class="variable-card"><strong class="text-red-600 block mb-2">$L_i$</strong><p class="text-xs">Liquidity Depth: Capital mass deployed in Citadel i.</p></div>
                    <div class="variable-card"><strong class="text-red-600 block mb-2">$\alpha_i$</strong><p class="text-xs">Inference Alpha: Accuracy multiplier from Allora ML.</p></div>
                    <div class="variable-card"><strong class="text-red-600 block mb-2">$C_q$</strong><p class="text-xs">Factional Quotient: Collective weight of staked $GOT.</p></div>
                    <div class="variable-card"><strong class="text-red-600 block mb-2">$C_{total}$</strong><p class="text-xs">Global Competition: Total resistance from other swarms.</p></div>
                </div>
                <p class="indent-p mt-8">Raw wealth ($L$) cannot win without intelligence ($\alpha$). This creates an intelligence-first economy where lean, smart factions can out-perform massive, slow-moving capital blocks.</p>
            </section>

            <section id="roadmap">
                <h2 class="text-5xl mb-12 tracking-tighter">07. Deployment Roadmap</h2>
                <div class="phase-card">
                    <div class="phase-title">Phase I: The Genesis Siege</div>
                    <p class="indent-p">Focuses on the Token Generation Event (TGE) via SunPump and the minting of 1,000 "First Men" AI General NFTs. These agents begin historical data collection. Initial liquidity citadels are established on SunSwap V3.</p>
                </div>
                <div class="phase-card">
                    <div class="phase-title">Phase II: Cognitive Expansion</div>
                    <p class="indent-p">Full Allora integration. AI Generals move to live inference streams. The World Map is decentralized on BTFS 4.0. Faction DAOs allow users to stake $GOT to amplify their swarm’s conquest velocity.</p>
                </div>
                <div class="phase-card">
                    <div class="phase-title">Phase III: Institutional RWAs</div>
                    <p class="indent-p">Integration with Real-World Asset (RWA) providers on TRON. AI agents capture yield from T-Bills and institutional debt. Cross-chain BitTorrent Bridge allows arbitrage raids on external EVM networks.</p>
                </div>
                <div class="phase-card">
                    <div class="phase-title">Phase IV: Terminal Autonomy</div>
                    <p class="indent-p">The human "Small Council" dissolves. The protocol becomes self-funding and self-governing via performance-weighted voting. The Imperial Treasury pays for its own DePIN compute in perpetuity.</p>
                </div>
            </section>

            <section id="math-proof">
                <h2 class="text-5xl mb-12 tracking-tighter text-red-600">08. Proof of Conquest</h2>
                <div class="clause">
                    <strong>Cryptographic Validation:</strong>
                    <p class="indent-p">Every action taken by an AI General is backed by a "Proof of Conquest." This links the transaction to an inference hash from the Allora network, ensuring that the agent acted based on predictive data rather than unauthorized manual interference.</p>
                </div>
            </section>

            <section id="btfs-sharding">
                <h2 class="text-5xl mb-12 tracking-tighter text-blue-400">09. BTFS Protocol</h2>
                <div class="clause">
                    <strong>State Sharding Architecture:</strong>
                    <p class="indent-p">The game map is sharded into 49 principalities using a Merkle-BitTree structure. This allows the UI to stream only the necessary data from BTFS, ensuring a fast experience while maintaining total decentralization and anchoring state roots to TRON.</p>
                </div>
            </section>

            <section id="governance">
                <h2 class="text-5xl mb-12 tracking-tighter text-yellow-600">10. Factional Politics</h2>
                <div class="clause">
                    <strong>Weighted Intelligence Voting:</strong>
                    <p class="indent-p">Voting power ($VP$) is a synthesis of capital and intelligence: $VP = \sqrt{Staked\_GOT} \cdot \log_{2}(Rank + 1)$. This ensures that factions with high-performing, experienced AI swarms have a greater voice than those with raw capital alone.</p>
                </div>
            </section>

            <section id="security">
                <h2 class="text-5xl mb-12 tracking-tighter text-red-600">11. Security & Risk</h2>
                <div class="clause">
                    <strong>Multi-Model Consensus Defense:</strong>
                    <p class="indent-p">High-value raids require consensus from three independent Allora workers. If variance exceeds 5%, the "Night’s Watch" circuit breaker pauses the trade, protecting factional assets from potential model hallucinations or poisoning.</p>
                </div>
            </section>

            <section id="ux-viz">
                <h2 class="text-5xl mb-12 tracking-tighter">12. War Room UX</h2>
                <div class="clause">
                    <strong>Tactical Telemetry:</strong>
                    <p class="indent-p">A 3D WebGL dashboard visualizing live capital flows and "Inference Clouds." Governors monitor the AI swarm’s automated movements and confidence levels, providing transparency into the agentic decision-making process.</p>
                </div>
            </section>

            <section id="sustainability">
                <h2 class="text-5xl mb-12 tracking-tighter text-green-500">13. Sustainability</h2>
                <div class="clause">
                    <strong>Burn-and-Mint Equilibrium:</strong>
                    <p class="indent-p">Targets a net-zero or deflationary supply. Tokens are burned as fuel for agentic computation and citadel maintenance, while minting occurs as performance-based rewards for successful conquests.</p>
                </div>
            </section>

            <section id="appendix">
                <h2 class="text-5xl mb-12 tracking-tighter underline">14. Glossary & Technical Appendix</h2>
                <div class="grid md:grid-cols-2 gap-10 mb-12">
                    <div class="clause">
                        <strong class="text-red-600">Glossary of Terms:</strong>
                        <ul class="text-xs space-y-2 mt-4">
                            <li><strong>Allora Network:</strong> Decentralized ML inference layer.</li>
                            <li><strong>Neural-Seed:</strong> TRC-721 AI General identity.</li>
                            <li><strong>Citadel:</strong> Target DeFi protocols (SunSwap/JustLend).</li>
                            <li><strong>Sovereign Directive:</strong> Human-set risk parameters for AI.</li>
                        </ul>
                    </div>
                    <div class="clause">
                        <strong class="text-blue-400">Protocol Parameters:</strong>
                        <ul class="text-xs space-y-2 mt-4">
                            <li><strong>Settlement Epoch:</strong> 1,000 TRON Blocks.</li>
                            <li><strong>Inference Heartbeat:</strong> 3.0 Seconds.</li>
                            <li><strong>Consensus Threshold:</strong> 66% (2/3 Workers).</li>
                            <li><strong>Minimum Stake ($C_q$):</strong> 100,000 $GOT.</li>
                        </ul>
                    </div>
                </div>
                <div class="math-block">
                    <h4 class="text-white mb-4 uppercase text-xs font-black">Smart Contract Architecture (Core)</h4>
                    <p class="text-[10px] font-mono leading-relaxed text-gray-500">
                        // GoT_NeuralSeed.sol (TRC-721 Interface)<br>
                        // GoT_Vault.sol (Liquidity Custody)<br>
                        // GoT_AlloraBridge.sol (Inference Validation)<br>
                        // GoT_Governance.sol (Weighted Quadratic Voting)
                    </p>
                </div>
            </section>

            <footer class="py-40 text-center border-t border-white/5 mt-40">
                <p class="text-[9px] text-gray-800 uppercase font-black tracking-widest leading-relaxed">
                    © 2026 Small Council. All Rights Reserved. Built on TRON. Powered by Allora.
                </p>
            </footer>

        </main>
    </div>

</body>
</html>
