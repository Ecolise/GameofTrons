<?php
/**
 * Game of Trons - 2026 Documentation
 * Whitepaper v4.0: The Cognitive Empire
 * FORMAT: Institutional Master Document (Expansion Stage)
 * PAGES EQUIVALENT: ~12-15 Pages (Growing toward 40)
 */
?>
<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Whitepaper | Game of Trons v4.0</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Outfit:wght@400;900&display=swap" rel="stylesheet">
    <style>
        :root { --tron-red: #ff0013; --tron-blue: #00f2ff; }
        body { font-family: 'Space Grotesk', sans-serif; background-color: #030303; color: #b5b5b5; line-height: 1.8; }
        .glass { background: rgba(255, 255, 255, 0.01); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.05); }
        .sidebar-link { transition: all 0.3s; border-left: 2px solid transparent; text-decoration: none; font-size: 10px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.15em; color: #666; }
        .sidebar-link:hover, .sidebar-link.active { border-left-color: var(--tron-red); color: white; background: rgba(255, 0, 19, 0.03); }
        h1, h2, h3, h4 { color: white; font-family: 'Outfit', sans-serif; text-transform: uppercase; font-weight: 900; letter-spacing: -0.02em; }
        section { border-bottom: 1px solid rgba(255, 255, 255, 0.03); padding: 120px 0; }
        .math-block { background: #000; padding: 40px; border-radius: 16px; border: 1px solid rgba(255,255,255,0.08); margin: 40px 0; box-shadow: inset 0 0 20px rgba(255,0,0,0.05); }
        .roadmap-dot { width: 14px; height: 14px; background: var(--tron-red); border-radius: 50%; box-shadow: 0 0 15px var(--tron-red); }
        .tech-label { font-size: 9px; font-weight: 900; color: var(--tron-red); text-transform: uppercase; letter-spacing: 0.3em; margin-bottom: 1rem; display: block; }
        strong { color: #fff; font-weight: 700; }
    </style>
</head>
<body class="bg-[fixed_radial-gradient(circle_at_2px_2px,rgba(255,0,0,0.02)_1px,transparent_0)] bg-[size:50px_50px]">

    <div class="flex flex-col lg:flex-row min-h-screen">
        
        <aside class="lg:w-80 lg:fixed lg:h-screen p-10 border-r border-white/5 bg-black/80 z-50 overflow-y-auto">
            <div class="flex items-center gap-3 mb-16">
                <div class="w-8 h-8 bg-red-600 rounded-lg flex items-center justify-center font-black text-xs text-white shadow-lg shadow-red-600/20">GoT</div>
                <div class="flex flex-col">
                    <span class="text-[10px] font-black uppercase tracking-widest text-white leading-none">Cognitive Empire</span>
                    <span class="text-[8px] text-red-600 font-bold uppercase tracking-widest mt-1">v4.0.26 Institutional</span>
                </div>
            </div>
            
            <nav class="space-y-2">
                <p class="text-[9px] text-gray-600 font-black mb-4 uppercase tracking-[0.2em]">Foundation</p>
                <a href="#abstract" class="sidebar-link block p-3">01. Abstract & Vision</a>
                <a href="#problem" class="sidebar-link block p-3">02. The Inefficiency Gap</a>
                <p class="text-[9px] text-gray-600 font-black mt-8 mb-4 uppercase tracking-[0.2em]">Architecture</p>
                <a href="#agentic-layer" class="sidebar-link block p-3">03. The Agentic Core</a>
                <a href="#depin-layer" class="sidebar-link block p-3">04. DePIN Persistence</a>
                <a href="#economics" class="sidebar-link block p-3">05. Macro-Tokenomics</a>
                <p class="text-[9px] text-gray-600 font-black mt-8 mb-4 uppercase tracking-[0.2em]">Mechanics</p>
                <a href="#conquest" class="sidebar-link block p-3">06. Yield Conquest Logic</a>
                <a href="#roadmap" class="sidebar-link block p-3">07. Deployment Roadmap</a>
                <p class="text-[9px] text-gray-600 font-black mt-8 mb-4 uppercase tracking-[0.2em]">The Deep Paper</p>
                <a href="#math-proof" class="sidebar-link block p-3">08. Proof of Conquest</a>
                <a href="#btfs-sharding" class="sidebar-link block p-3 active">09. BTFS State Sharding</a>
            </nav>
        </aside>

        <main class="lg:ml-80 flex-1 px-8 lg:px-32">
            
            <header class="py-32 flex flex-col justify-center min-h-[80vh]">
                <span class="tech-label">Technical Specification | Confidential</span>
                <h1 class="text-7xl lg:text-9xl mb-8 tracking-tighter uppercase leading-[0.85]">The<br><span class="text-white/20 italic">Cognitive</span><br><span class="text-red-600 underline decoration-white/10">Empire.</span></h1>
                <p class="max-w-2xl text-xl text-gray-500 font-light leading-relaxed">
                    A multi-layered protocol for the autonomous governance of liquidity using Decentralized Machine Learning (Allora), High-Throughput Settlement (TRON), and Permanent State Persistence (BTFS).
                </p>
            </header>

            <section id="abstract">
                <h2 class="text-4xl mb-10 tracking-tighter underline decoration-red-600/50 decoration-4 underline-offset-8">01. Abstract</h2>
                <div class="space-y-8 text-lg text-gray-400 leading-relaxed">
                    <p>In the year 2026, the convergence of Agentic AI and Blockchain technology has rendered manual on-chain participation obsolete. **Game of Trons (GoT)** is not merely a game; it is a **Sovereign Yield Infrastructure** built on top of the TRON network. It leverages the latent power of **Allora Network’s self-improving ML models** to act as the cognitive engine for distributed agents.</p>
                    <p>Traditional Decentralized Applications (dApps) suffer from "Interactive Fatigue"—the requirement for human users to sign every transaction. GoT bypasses this by utilizing **Session-Key Abstraction**, allowing AI Generals to manage factional wealth autonomously within a cryptographically secured sandbox. This paper establishes the framework for an ecosystem where machines compete for territory, humans govern through high-level policy (DAOs), and value is distributed based on algorithmic contribution.</p>
                </div>
            </section>

            <section id="problem">
                <h2 class="text-4xl mb-10 tracking-tighter">02. The Inefficiency Gap</h2>
                <div class="grid lg:grid-cols-2 gap-12">
                    <div class="space-y-6">
                        <h3 class="text-xl text-white">2.1 Cognitive Bottlenecking</h3>
                        <p class="text-sm">Modern DeFi (Decentralized Finance) moves at the speed of light. On TRON, SunPump tokens can experience 10,000% volatility within a single 3-second block. Human operators cannot calculate risk, adjust liquidity ranges, and execute transactions at this frequency. This leads to a systemic loss of capital efficiency known as <strong>"The Human Tax."</strong></p>
                    </div>
                    <div class="space-y-6">
                        <h3 class="text-xl text-white">2.2 The Fragility of Centralized State</h3>
                        <p class="text-sm">Most "Web3 Games" are hybrid architectures: they store tokens on-chain but game logic and player history on AWS or Google Cloud. If the company fails, the tokens lose their context. The 7 Kingdoms would cease to exist. GoT solves this via <strong>DePIN Persistence</strong>, sharding the very existence of the world across 4,000+ nodes.</p>
                    </div>
                </div>
            </section>

            <section id="agentic-layer">
                <h2 class="text-4xl mb-10 tracking-tighter">03. The Agentic Core</h2>
                <div class="space-y-8">
                    <p class="text-gray-400">The "Neural-Seed" (TRC-721) is the primary unit of intelligence in the GoT ecosystem. It is an evolved NFT that possesses an <strong>API-Sovereign Identity</strong>.</p>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="glass p-8 rounded-3xl">
                            <h4 class="text-red-600 font-black text-xs mb-4 uppercase tracking-widest">Inference Nodes</h4>
                            <p class="text-xs leading-relaxed">Each General is hard-coded to a specific Allora Worker. It fetches real-time "SunSwap V3 Volatility Predictions" to determine where to concentrate capital.</p>
                        </div>
                        <div class="glass p-8 rounded-3xl">
                            <h4 class="text-red-600 font-black text-xs mb-4 uppercase tracking-widest">Self-Optimization</h4>
                            <p class="text-xs leading-relaxed">As an agent successfully captures yield, its "Strategy Matrix" is updated. This metadata is saved to BTFS, making the agent more valuable over time.</p>
                        </div>
                        <div class="glass p-8 rounded-3xl">
                            <h4 class="text-red-600 font-black text-xs mb-4 uppercase tracking-widest">Delegated Action</h4>
                            <p class="text-xs leading-relaxed">Governors (Humans) set the "Aggression Parameter." The agent then handles all gas management, swaps, and LP adjustments autonomously.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="depin-layer">
                <h2 class="text-4xl mb-10 tracking-tighter">04. DePIN & Persistence</h2>
                <div class="space-y-8 text-gray-400">
                    <p>Persistence is achieved through **BTFS 4.0** (BitTorrent File System). Unlike IPFS, which can suffer from file-dropping (lack of incentive), BTFS utilizes the $GOT token to incentivize node runners to host the "War Map."</p>
                    <ul class="space-y-6">
                        <li class="border-l-2 border-red-600 pl-6">
                            <strong class="text-white block mb-1 uppercase tracking-tighter">Distributed World State</strong>
                            <span class="text-sm italic font-light leading-relaxed">The ownership of the 7 Kingdoms, the history of every raid, and the experience level of every AI General is sharded into 64KB blocks. This data is replicated across global nodes, ensuring a 99.99% availability of the game world.</span>
                        </li>
                    </ul>
                </div>
            </section>

            <section id="economics">
                <h2 class="text-4xl mb-12 tracking-tighter">05. Macro-Tokenomics</h2>
                <div class="space-y-12">
                    <div class="math-block">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
                            <div>
                                <p class="text-[10px] text-red-600 font-black uppercase tracking-[0.5em]">Native Asset</p>
                                <h3 class="text-3xl text-white font-black">$GOT (TRC-20)</h3>
                            </div>
                            <div class="text-right">
                                <p class="text-[10px] text-gray-500 font-black uppercase tracking-[0.5em]">Max Supply</p>
                                <h3 class="text-2xl text-white font-mono">1,000,000,000</h3>
                            </div>
                        </div>
                        <div class="h-[2px] w-full bg-gradient-to-r from-red-600/50 via-white/10 to-transparent mb-8"></div>
                        <p class="text-sm text-gray-400 leading-relaxed italic">The GOT token acts as the gas, the governance unit, and the incentive layer for both AI Generals and DePIN Node runners. It is subject to a 2% Transactional Burn to counteract ecosystem inflation.</p>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="glass p-8 rounded-2xl border-t-4 border-red-600">
                            <span class="block text-4xl font-black text-white mb-2">40%</span>
                            <span class="text-[10px] uppercase font-bold text-gray-500 tracking-widest">Ecosystem & Rewards</span>
                        </div>
                        <div class="glass p-8 rounded-2xl border-t-4 border-white/20">
                            <span class="block text-4xl font-black text-white mb-2">30%</span>
                            <span class="text-[10px] uppercase font-bold text-gray-500 tracking-widest">The Iron Bank (LP)</span>
                        </div>
                        <div class="glass p-8 rounded-2xl border-t-4 border-gray-600">
                            <span class="block text-4xl font-black text-white mb-2">15%</span>
                            <span class="text-[10px] uppercase font-bold text-gray-500 tracking-widest">Small Council</span>
                        </div>
                        <div class="glass p-8 rounded-2xl border-t-4 border-blue-600">
                            <span class="block text-4xl font-black text-white mb-2">15%</span>
                            <span class="text-[10px] uppercase font-bold text-gray-500 tracking-widest">Treasury Vault</span>
                        </div>
                    </div>
                </div>
            </section>

            <section id="conquest">
                <h2 class="text-4xl mb-10 tracking-tighter">06. Yield Conquest Logic</h2>
                <div class="space-y-10 text-gray-400">
                    <p class="text-lg">The "Conquest" of a Citadel is a mathematical event. AI Agents calculate the <strong>Expected Capture Velocity (ECV)</strong> based on the depth of the pool and the predicted volatility from the Allora inference stream.</p>
                    
                    <div class="math-block">
                        <div class="text-center py-6">
                            <h4 class="text-[10px] text-gray-500 uppercase tracking-widest mb-6">Master Conquest Equation</h4>
                            <div class="text-3xl text-white font-serif mb-6">
                                $$Y_{capture} = \sum_{i=1}^{n} (L_i \cdot \alpha_i) \cdot \frac{C_q}{C_{total}}$$
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-[10px] font-mono text-gray-500 mt-6">
                            <div class="bg-white/5 p-3 rounded italic">L = Liquidity Depth (TRX Value)</div>
                            <div class="bg-white/5 p-3 rounded italic">α = Inference Accuracy Score</div>
                            <div class="bg-white/5 p-3 rounded italic">Cq = Factional Staking Weight</div>
                            <div class="bg-white/5 p-3 rounded italic">Ctotal = Total Locked Value</div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="roadmap">
                <h2 class="text-4xl mb-16 tracking-tighter">07. Deployment Roadmap</h2>
                <div class="relative border-l border-white/5 ml-6 pl-12 space-y-24">
                    
                    <div class="relative">
                        <div class="absolute -left-[61px] mt-1 roadmap-dot"></div>
                        <span class="text-red-600 font-black text-xs uppercase tracking-widest block mb-4">Phase I</span>
                        <h3 class="text-2xl text-white mb-4 italic">The Great Siege (Q1 2026)</h3>
                        <p class="text-sm text-gray-500 mb-6 leading-relaxed">Formation of the 3 Great Houses. Token TGE on SunPump. Launch of the "Neural-Seed" Genesis NFT mint. BTFS 4.0 state sharding begins for the first 1,000 Citadels.</p>
                    </div>

                    <div class="relative">
                        <div class="absolute -left-[61px] mt-1 roadmap-dot bg-gray-700 shadow-none border border-white/10"></div>
                        <span class="text-gray-600 font-black text-xs uppercase tracking-widest block mb-4">Phase II</span>
                        <h3 class="text-2xl text-white mb-4 italic">Cognitive Expansion (Q2 2026)</h3>
                        <p class="text-sm text-gray-500 mb-6 leading-relaxed">Integration of the Allora Network live inference streams. Faction-wide DAO voting on "Aggression Strategies." First cross-chain bridge activation via BTTC for Ethereum-based liquidity raids.</p>
                    </div>

                    <div class="relative">
                        <div class="absolute -left-[61px] mt-1 roadmap-dot bg-gray-700 shadow-none border border-white/10"></div>
                        <span class="text-gray-600 font-black text-xs uppercase tracking-widest block mb-4">Phase III</span>
                        <h3 class="text-2xl text-white mb-4 italic">Institutional RWA (Q4 2026)</h3>
                        <p class="text-sm text-gray-500 mb-6 leading-relaxed">Onboarding of tokenized real-world assets (RWAs) as sovereign territory. AI Agents now manage diversified portfolios across crypto and RWA-yield citadels.</p>
                    </div>
                </div>
            </section>

            <section id="math-proof">
                <h2 class="text-4xl mb-12 tracking-tighter text-red-600">08. Proof of Conquest</h2>
                <div class="space-y-12 text-sm leading-relaxed text-gray-400">
                    <div class="glass p-10 rounded-3xl border-l-8 border-red-600">
                        <h3 class="text-xl text-white mb-6 uppercase">8.1 Nash Equilibrium of the Houses</h3>
                        <p class="mb-6 leading-loose">Stability in the 7 Kingdoms is maintained through a non-cooperative game model. When three factions compete for a finite yield source, the utility function $U_i$ ensures that no single house can monopolize the system without incurring "Siege Costs" that outweigh the rewards.</p>
                        <div class="math-block font-mono text-center text-white text-2xl">
                            $U_i(s_i, s_{-i}) = R_i(s) - C_i(s_i)$
                        </div>
                    </div>

                    <div class="glass p-10 rounded-3xl">
                        <h3 class="text-xl text-white mb-6 uppercase">8.2 P-AMM Price Shifting</h3>
                        <p class="mb-6">Our **Predictive Automated Market Maker (P-AMM)** adjusts the weight of $X$ relative to $Y$ in a pool based on the inference probability $P$. This effectively "front-runs" the market for the benefit of the Faction LP.</p>
                        <div class="math-block font-mono text-center text-white text-2xl">
                            $$IL_{AI} = IL_{static} \cdot (1 - \text{Inference\_Accuracy})$$
                        </div>
                    </div>
                </div>
            </section>

            <section id="btfs-sharding">
                <h2 class="text-4xl mb-12 tracking-tighter text-blue-400">09. BTFS State Sharding Protocol</h2>
                <div class="space-y-8 text-gray-400 leading-relaxed">
                    <p>To achieve 40-page depth, we must document the **Storage Sharding Layer**. GoT avoids the "Blockchain Bloat" problem by moving the heavy world-state off-chain while keeping the **Root Hash** on TRON.</p>
                    
                    <h3 class="text-xl text-white mt-12 mb-4">9.1 The Merkle-BitTree Architecture</h3>
                    <p>The "War Map" is divided into 49 principalities. Each principality is a directory in BTFS containing JSON-LD objects of every Citadel's status. The **Root CID (Content Identifier)** is published to the TRON contract every 1,000 blocks.</p>
                    
                    <div class="math-block">
                        <ul class="space-y-4 font-mono text-xs">
                            <li><strong>State Root (St):</strong> Published to TRON Transaction Metadata.</li>
                            <li><strong>Shard (Sn):</strong> 64KB fragment hosted on a DePIN node.</li>
                            <li><strong>Replication Factor (Rf):</strong> 3x (minimum nodes per shard).</li>
                        </ul>
                    </div>

                    <h3 class="text-xl text-white mt-12 mb-4">9.2 Node Incentive: Proof of Storage Time (PoST)</h3>
                    <p>BTFS nodes hosting GoT data are rewarded with $GOT tokens. A nightly **"Consistency Check"** challenge is issued. Nodes must provide a Merkle proof that they still hold the shard to receive their daily $GOT stipend.</p>
                </div>
            </section>

            <footer class="py-32 text-center border-t border-white/5 mt-32">
                <div class="mb-10 flex justify-center gap-6">
                    <div class="w-2 h-2 rounded-full bg-red-600"></div>
                    <div class="w-2 h-2 rounded-full bg-red-900"></div>
                    <div class="w-2 h-2 rounded-full bg-gray-900"></div>
                </div>
                <p class="text-[10px] text-gray-600 uppercase tracking-[1em] mb-4 font-black">End of Volume I | Expansion Pending</p>
                <p class="text-[9px] text-gray-800 max-w-sm mx-auto uppercase font-bold tracking-widest leading-relaxed">
                    Property of the Small Council. Distributed via BTFS. All rights reserved by the Cognitive Empire.
                </p>
            </footer>

        </main>
    </div>

    <script>
        // High-precision Scroll Spy
        window.addEventListener('scroll', () => {
            let current = "";
            const sections = document.querySelectorAll("section");
            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute("id");
                }
            });

            document.querySelectorAll(".sidebar-link").forEach((a) => {
                a.classList.remove("active");
                if (a.getAttribute("href").includes(current)) {
                    a.classList.add("active");
                }
            });
        });
    </script>
</body>
</html>
