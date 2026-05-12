Design Prompt — SDP "Midnight Neo-SaaS"

Use este prompt para reproduzir fielmente o design do Sistema de Divulgação de Publicações.

---

1. Direção criativa
- Nome do estilo: Midnight Neo-SaaS (inspiração: Linear, Vercel, Stripe Docs).
- Tom: acadêmico moderno, escuro, sério e premium. Nada de  genérico tipo "AI startup".
- Idioma: Português do Brasil.

2. Paleta (formato OKLCH)



Token



Valor



Aproximação



Uso





--background



oklch(0 0 0)



#000000 preto puro



Fundo global





--card / --surface-card



oklch(0.16 0.01 240)



~`#0E1116` carvão azulado



Cards, nav, footer





--brand (novo "vermelho Fatec")



oklch(0.55 0.19 25)



~`#C8102E` carmim



CTAs, glows, ícones, palavra-acento do hero





--accent-2 (azul-ardósia da logo)



oklch(0.45 0.04 240)



~`#3F4A5A` slate



Bordas vivas, badges secundárias, gradientes





--foreground



oklch(0.985 0 0)



branco



Texto principal





--muted-foreground



oklch(0.7 0.01 240)



cinza neutro frio



Texto secundário





--hairline / --border



oklch(1 0 0 / 7%)



branco 7%



Bordas finas





--ring



igual ao novo brand



—



Focus ring





Gradiente do hero



from-brand to-[oklch(0.7_0.15_25)]



carmim → coral claro



Palavra "repensada"

3. Tipografia
- Display: `Bricolage Grotesque` — pesos 300, 500, 700, 800 (Google Fonts).
- Sans (corpo): `Inter` — pesos 300, 400, 500, 600.
- Mono (eyebrows / labels): stack default monospace via `font-mono`, uppercase, `tracking-[0.25em]` ou `tracking-widest`, tamanho `text-[10px]`, cor `text-brand` ou `text-muted-foreground`.
- Hero H1: `font-display font-extrabold` (800), `text-5xl` mobile → `sm:text-7xl` → `md:text-8xl`, `tracking-tighter`, `leading-[0.95]`, `text-balance`. Palavra de destaque em itálico com `bg-clip-text text-transparent` + gradiente violeta.
- H2 de seção: `font-display font-extrabold`, `text-4xl sm:text-5xl`, `tracking-tight`.
- H3 de card: `font-display font-bold`, `text-2xl`.
- Parágrafo hero: `text-lg sm:text-xl`, `font-light`, `leading-relaxed`, `text-muted-foreground`, `max-w-xl`.
- Selection: fundo `color-mix(in oklab, var(--brand) 30%, transparent)`.

4. Sistema de spacing & layout
- Container principal: `max-w-6xl mx-auto`, padding lateral `px-6`.
- Padding vertical de seções: `py-24` (hero usa `pt-36 pb-24` / `sm:pt-40`).
- Grid bento: `grid-cols-1 md:grid-cols-12 gap-5`. Cards alternam `col-span-8 / col-span-4 / col-span-12`.
- Grid critérios cards: `grid-cols-2 md:grid-cols-4 gap-5`.
- Lista de critérios: `grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3` dentro de um card grande.

5. Border-radius (raios)
- Base: `--radius: 0.875rem`.
- Nav pill, badges, dots de status: `rounded-full`.
- Botões CTA: `rounded-2xl`.
- Cards de entidade / arquitetura: `rounded-3xl`.
- Card CTA final: `rounded-[2.5rem]`.
- Cards de critério / linhas de relação: `rounded-2xl` / `rounded-xl`.
- Imagens: `rounded-2xl`.

6. Bordas
- Padrão em tudo escuro: `border border-hairline` (= branco 8%).
- Hover de cards: `hover:border-brand/30` (transição de cor).
- Sem bordas grossas em lugar nenhum — todas 1px hairline.

7. Botões
Primário (CTA brand):
```
rounded-2xl bg-brand px-8 py-4 font-bold text-brand-foreground
hover:shadow-[0_0_50px_-12px_oklch(0.55_0.22_295/0.7)]
transition-all cursor-pointer
w-full sm:w-auto
```

Secundário (ghost dark):
```
rounded-2xl border border-hairline bg-white/5 px-8 py-4 font-bold
hover:bg-white/10 transition-all cursor-pointer
```

Nav button (pill branco invertido):
```
rounded-full bg-foreground text-background px-5 py-2.5
text-xs font-bold
hover:bg-brand hover:text-white transition-all
```

8. Navegação (floating pill)
- `fixed top-4 left-1/2 -translate-x-1/2 z-50`
- Largura: `w-[94%] max-w-5xl`
- `rounded-full border border-hairline bg-card/60 backdrop-blur-xl`
- Padding: `px-4 py-2.5 sm:px-6 sm:py-3`
- Logo: quadrado `size-8 rounded-lg bg-brand` com losango branco interno (`size-3.5 rotate-45 rounded-sm bg-white`).
- Links: `text-sm font-medium text-muted-foreground hover:text-foreground`, gap `gap-7`.

9. Cards
- Base: `rounded-3xl border border-hairline bg-card p-7`.
- Ícone container: `size-12 rounded-xl bg-brand/10` + ícone Lucide `size-5 text-brand`.
- Glow decorativo: `absolute -right-16 -bottom-16 size-48 rounded-full bg-brand/5 blur-3xl group-hover:bg-brand/15 transition-all duration-700`.
- "Call to action" textual em mono uppercase + ícone seta (`ArrowRight size-3`).

10. Efeitos / glow ambiente
- Glow fixo no fundo da página:
  - Top center: `size-[600px] rounded-full bg-brand/20 blur-[140px]`
  - Direita meio: `size-[500px] bg-brand/10 blur-[120px]`
- Halo embaixo do dashboard preview: `inset-x-12 -bottom-6 h-24 bg-brand/30 blur-3xl`.
- Card CTA final: glow superior `size-96 bg-brand/30 blur-3xl` centralizado.
- Status dot animado: ping com `animate-ping` + dot sólido sobreposto em `bg-brand`.

11. Iconografia
- Biblioteca: lucide-react.
- Ícones usados: `BookOpen, Megaphone, Users, Tag, Layers, UserPlus, ArrowRight, Sparkles, Database, Shield, Code2`.
- Tamanho padrão: `size-5` em containers, `size-3` para acentos inline.
- Cor: sempre `text-brand` quando dentro do container `bg-brand/10`.

12. Imagens
- Hero dashboard preview (1600×900, eager, sem `loading="lazy"` por ser LCP).
- Visualização de relacionamentos (1024×1024, `loading="lazy"`, `aspect-square object-cover`), com overlay gradiente `from-background/60 via-transparent to-transparent` e chips flutuantes mono uppercase no rodapé.

13. Microinterações
- Transições padrão: `transition-colors` ou `transition-all`, duração padrão Tailwind (150ms), glow do card `duration-700`.
- Hover de cards: muda borda para `brand/30` e intensifica o glow interno.
- Hover de botão primário: shadow violeta difusa.
- Sem animações de scroll/parallax — restraint editorial.

14. Eyebrows / labels acadêmicos
Padrão recorrente acima de cada H2:
```
text-[10px] font-mono uppercase tracking-[0.25em] text-brand mb-4
```
Ex.: "Seis entidades · Um modelo", "Modelo lógico", "Seção III · Critérios", "ILP512-A · 2º Semestre / 2025".

15. Footer
- `border-t border-hairline py-10`.
- Layout `flex-col md:flex-row`, `justify-between`, `gap-6`.
- Logo desbotada `bg-brand/40`, links `text-xs text-muted-foreground hover:text-foreground`.

---

Mantenha dark-only, sem light mode. Use sempre tokens semânticos (`bg-card`, `text-muted-foreground`, `border-hairline`, `text-brand`) — nunca `bg-black`, `text-white` cru. O violeta deve ser pontual: glows, CTAs, ícones e a palavra-acento do hero. O resto vive em pretos profundos com hairlines de 8% de branco.

Criar guia de estilo
Exportar tokens do design
Implementar biblioteca de UI
Adicionar demo de componentes
Gerar documentação do CSS