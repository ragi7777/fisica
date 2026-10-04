---
Title: Demostración axiomática del Teorema Spin Estadística
Description: Demostración axiomática del Teorema Spin Estadística
---

# 📋 %meta.description%

La demostración axiomática formal del **Teorema Spin-Estadística**, perfeccionada por **Borchers, Burgoyne, Hall, Wightman y Streater**, no recurre a descomposiciones en modos de onda plana ni a Lagrangianos explícitos. En su lugar, se fundamenta rigurosamente en la **estrucutra matemática de las funciones de correlación (funciones de Wightman)** y sus propiedades de **analiticidad en el espacio-tiempo complejo**.

---

## 1. El Marco Axiomático de Wightman

Definimos los campos cuánticos $\phi_\alpha(x)$ no como operadores directos punto a punto, sino como **distribuciones temperadas relativas a un espacio de Hilbert $\mathcal{H}$** que transforman bajo una representación finita $(j_1, j_2)$ del grupo de Lorentz $SL(2, \mathbb{C})$.

El espín de la representación es $s = j_1 + j_2$.

* Si $2s$ es par (espín entero), la representación es de dimensión impar y univaluada ($SO^+(1,3)$).
* Si $2s$ es impar (espín semientero), es multivaluada / espinorial y cambia de signo bajo una rotación de $2\pi$:

<div>
$$\phi_\alpha(R(2\pi)x) = (-1)^{2s} \phi_\alpha(x)$$
</div>

### Las Funciones de Wightman de 2 Puntos

Consideremos el valor esperado en el vacío de dos campos:

<div>
$$W_{\alpha\beta}(x_1, x_2) = \langle 0 \vert{} \phi_\alpha(x_1) \phi_\beta(y) \vert{} 0 \rangle$$
</div>

Por invariancia bajo traslaciones, $W\_{\alpha\beta}(x, y) = W\_{\alpha\beta}(\xi)$, donde $\xi = x - y$.

---

## 2. Condición del Espectro de Energía y Dominios de Analiticidad

El axioma de la condición del espectro (posibilidad de energía $p^0 \geq 0$ con $p^2 \geq 0$) implica que la transformada de Fourier de $W(\xi)$ solo contiene soporte en el cono de luz futuro $V^+$:

<div>
$$W_{\alpha\beta}(\xi) = \int_{V^+} d^4p \, e^{-i p \cdot \xi} \tilde{W}_{\alpha\beta}(p)$$
</div>

### Prolongación Complexa a la Tubera de Bargmann-Hall-Wightman (BHW)

Si analitizamos la variable espacial extendiéndola al espacio-tiempo complejo $\zeta = \xi - i\eta$ con $\eta = (\eta^0, \boldsymbol{\eta}) \in V^+$ (el cono de luz futuro real), la exponencial se convierte en:

<div>
$$e^{-i p \cdot \zeta} = e^{-i p \cdot \xi} e^{-p \cdot \eta}$$
</div>

Como $p \in V^+$ y $\eta \in V^+$, el producto escalar lorentziano $p \cdot \eta = p^0\eta^0 - \mathbf{p} \cdot \boldsymbol{\eta} > 0$ es estrictamente positivo. Esto garantiza que la integral converge exponencialmente y define una función **holomorfa (analítica)** en el dominio complejo denominado la **Tubera de Wightman** $\mathcal{T}_2$:

<div>
$$\mathcal{T}_2 = \{ \zeta = \xi - i\eta \in \mathbb{C}^4 \mid \eta \in V^+ \}$$
</div>

---

## 3. Invariancia de Lorentz Compleja

El **Teorema de Bargmann-Hall-Wightman (BHW)** establece que la función analítica $W\_{\alpha\beta}(\zeta)$ en $\mathcal{T}\_2$ admite una extensión analítica única a la **Tubera Extendida** $\mathcal{T}\_2'$ obtenida aplicando todas las transformaciones del **grupo de Lorentz complejo** $L\_+(\mathbb{C})$:

<div>
$$\mathcal{T}_2' = \bigcup_{\Lambda \in L_+(\mathbb{C})} \Lambda \mathcal{T}_2$$
</div>

Bajo una transformación $\Lambda \in L_+(\mathbb{C})$, el campo transforma mediante una matriz $D(\Lambda)$:

<div>
$$W_{\alpha\beta}(\Lambda \zeta) = D_{\alpha\alpha'}(\Lambda) D_{\beta\beta'}(\Lambda) W_{\alpha'\beta'}(\zeta)$$
</div>

### El Elemento Clave: La Inversión Espacio-Temporal ($-\mathbb{I}$)

Una transformación fundamental es la inversión total del espacio-tiempo $\Lambda = -\mathbb{I}$ (que invierte tanto espacio como tiempo: $x \to -x$).

* En el grupo de Lorentz real ortócrono $SO^+(1,3)$, $-\mathbb{I} \notin SO^+(1,3)$ (requiere inversión de tiempo $T$ o paridad $P$).
* Sin embargo, en el **grupo de Lorentz complejo** $L_+(\mathbb{C})$, $-\mathbb{I}$ está en la componente conexa con la identidad. Puede alcanzarse analíticamente mediante una rotación continua por un ángulo $\pi$ en un plano complejo (por ejemplo, en el plano $x^0 - x^1$).

Al evaluar el comportamiento de la representación $D(-\mathbb{I})$ para un campo de espín $s$:

<div>
$$D(-\mathbb{I}) = (-1)^{2s} \mathbb{I}$$
</div>

Por lo tanto, la invariaza analítica de BHW impone rigurosamente la identidad:

<div>
$$W_{\alpha\beta}(-\zeta) = (-1)^{2s} W_{\alpha\beta}(\zeta) \quad \forall \zeta \in \mathcal{T}_2'$$
</div>

---

## 4. Puntos de Jost y Conexión con la Microcausalidad

Un conjunto de puntos reales $\xi \in \mathbb{R}^4$ se denomina **Punto de Jost** si la separación es estrictamente tipo espacio ($\xi^2 < 0$).

Un teorema crucial de Jost demuestra que si $\xi$ es un punto de Jost, existe una transformación $\Lambda \in L_+(\mathbb{C})$ tal que $\Lambda \xi \in \mathcal{T}_2'$. En otras palabras, **los puntos de Jost forman parte de la frontera común de la analiticidad**.

Por lo tanto, la relación de analiticidad evaluada en puntos de Jost da:

<div>
$$W_{\alpha\beta}(-\xi) = (-1)^{2s} W_{\alpha\beta}(\xi) \quad \text{para } \xi^2 < 0$$
</div>

Reescribiendo en términos de los campos:

<div>
$$\langle 0 \vert{} \phi_\alpha(x) \phi_\beta(y) \vert{} 0 \rangle = (-1)^{2s} \langle 0 \vert{} \phi_\alpha(y) \phi_\beta(x) \vert{} 0 \rangle \quad \text{para } (x-y)^2 < 0$$
</div>

---

## 5. Demostración por Reducción al Absurdo (Conmutación vs. Anticonmutación)

Definamos la función de correlación combinada con un signo arbitrario $\epsilon = \pm 1$:

<div>
$$R_{\alpha\beta}(x - y) = \langle 0 \vert{} [\phi_\alpha(x), \phi_\beta(y)]_{-\epsilon} \vert{} 0 \rangle = W_{\alpha\beta}(x - y) - \epsilon W_{\beta\alpha}(y - x)$$
</div>

donde $[A, B]_{-\epsilon} = AB - \epsilon BA$.

Por la propiedad demostrada a partir de la analiticidad compleja de BHW, para puntos a distancia espacial ($(x-y)^2 < 0$):

<div>
$$W_{\beta\alpha}(y - x) = W_{\beta\alpha}(-(x - y)) = (-1)^{2s} W_{\beta\alpha}(x - y)$$
</div>

Sustituyendo esto en la condición de microcausalidad:

<div>
$$R_{\alpha\beta}(x - y) = W_{\alpha\beta}(x - y) - \epsilon (-1)^{2s} W_{\beta\alpha}(x - y)$$
</div>

### Caso 1: Espín entero ($2s$ es par, $(-1)^{2s} = +1$)

Si forzamos estadística de Fermi-Dirac ($\epsilon = -1$):

<div>
$$R_{\alpha\beta}(x - y) = W_{\alpha\beta}(x - y) + W_{\beta\alpha}(x - y)$$
</div>

Para que se cumpla la localidad en puntos tipo espacio, se requeriría $W\_{\alpha\beta}(x - y) = -W\_{\beta\alpha}(x - y)$.
Sin embargo, analitizando esto hacia el espacio Euclídeo (donde $W$ es estrictamente definida positiva debido al axioma de **norma positiva en el espacio de Hilbert** $\langle \psi \vert{} \psi \rangle \geq 0$), una función idénticamente anti-simétrica implica que:

<div>
$$W_{\alpha\beta}(x - y) \equiv 0 \implies \phi_\alpha(x) \vert{}0\rangle = 0 \implies \phi_\alpha(x) = 0$$
</div>

El campo tendría que ser trivialmente nulo. **Por lo tanto, los campos de espín entero DEBEN conmutar ($\epsilon = +1$).**

### Caso 2: Espín semientero ($2s$ es impar, $(-1)^{2s} = -1$)

Si forzamos estadística de Bose-Einstein ($\epsilon = +1$):

<div>
$$R_{\alpha\beta}(x - y) = W_{\alpha\beta}(x - y) - (+1)(-1) W_{\beta\alpha}(x - y) = W_{\alpha\beta}(x - y) + W_{\beta\alpha}(x - y)$$
</div>

De nuevo, la condición de microcausalidad obligaría a que $W_{\alpha\beta}(x-y) \equiv 0$, colapsando la teoría a un campo trivial vacante. **Por lo tanto, los campos de espín semientero DEBEN anticonmutar ($\epsilon = -1$).**

---

## Resumen del Mecanismo Matemático

1. **Espectro de Energía Positivo** $\implies$ Analiticidad de $W(\xi)$ en el tubo $\mathcal{T}$.
2. **Grupo de Lorentz Complejo $L_+(\mathbb{C})$** $\implies$ Extensión a $\mathcal{T}'$, que incluye la inversión espacial $-\mathbb{I}$.
3. **Representación de Spin** $\implies W(-\xi) = (-1)^{2s} W(\xi)$.
4. **Norma Positiva de Hilbert + Localidad** $\implies$ Imposibilidad de elegir el signo equivocado sin anular los operadores del campo.
