---
Title: Demostración del Teorema CPT
Description: Demostración del Teorema de Invarianza CPT
---

# 📋 %meta.description%

El **teorema CPT** (Carga, Paridad, Inversión Temporal) es uno de los pilares más profundos de la teoría cuántica de campos (QFT). Establece que **cualquier teoría cuántica de campos relativista, local y hermítica es invariante bajo la acción simultánea de las tres simetrías $C$, $P$ y $T$**.

A continuación se detalla la demostración en el marco axiomático de **Streater y Wightman**, utilizando campos escalares para ilustrar el mecanismo matemático sin sobrecargar la notación con espinores o índices de gauge (el resultado se generaliza directamente a espines arbitrarios).

---

## 1. Definición de las Transformaciones

Las tres transformaciones continuas/discretas actúan sobre los campos de la siguiente manera:

* **Paridad ($P$):** Invierte las coordenadas espaciales.

$$\mathcal{P} \, \phi(t, \mathbf{x}) \, \mathcal{P}^{-1} = \eta_P \, \phi(t, -\mathbf{x})$$


* **Conjugación de Carga ($C$):** Transforma partículas en antipartículas (sustituye el campo por su adjunto).

$$\mathcal{C} \, \phi(x) \, \mathcal{C}^{-1} = \eta_C \, \phi^\dagger(x)$$


* **Inversión Temporal ($T$):** Invierte la coordenada temporal. Al ser una simetría **antiunitaria** ($\mathcal{T} i \mathcal{T}^{-1} = -i$), invierte el orden de las fases complejas.

$$\mathcal{T} \, \phi(t, \mathbf{x}) \, \mathcal{T}^{-1} = \eta_T \, \phi(-t, \mathbf{x})$$



Combinando las tres transformaciones sobre un punto del espacio-tiempo $x = (t, \mathbf{x})$, obtenemos la transformación  antiunitaria combinada $\Theta = \mathcal{CPT}$:

$$\Theta \, \phi(x) \, \Theta^{-1} = \eta_{CPT} \, \phi^\dagger(-x)$$

Donde $\eta_{CPT}$ es una fase (que se ajusta convencionalmente a $+1$).

---

## 2. Los Cuatro Axiomas Fundamentales

La demostración del teorema se apoya estrictamente en cuatro axiomas de QFT:

1. **Invariancia de Lorentz Poincaré:** La teoría es invariante bajo la parte conexa del grupo de Lorentz $SO^+(1,3)$.
2. **Microcausalidad (Causalidad Local):** Dos operadores de campo en puntos separados por un intervalo tipo espacio conmutan (o anticonmutan):

$$[\phi(x), \phi(y)] = 0 \quad \text{si } (x - y)^2 < 0$$


3. **Condición del Espectro de Energía (Positividad):** El operador energía-momento $P^\mu$ satisface $P^0 \ge 0$ y $P^\mu P_\mu \ge 0$. Existe un único estado de vacío $\vert{}\Omega\rangle$ invariante de Lorentz.
4. **Hermiticidad / Unitariedad:** El hamiltoniano es hermítico, garantizando la conservación de la probabilidad.

---

## 3. Demostración Paso a Paso

### Paso 1: Las Funciones de Wightman

Consideremos la función de correlación de $n$ puntos en el vacío (función de Wightman):


$$W_n(x_1, x_2, \dots, x_n) = \langle \Omega \vert{} \phi(x_1) \phi(x_2) \dots \phi(x_n) \vert{} \Omega \rangle$$

Sustituyendo la transformación CPT $\Theta$ y sabiendo que el vacío es invariante ($\Theta \vert{}\Omega\rangle = \vert{}\Omega\rangle$) y que $\Theta$ es antiunitario ($\langle \Theta A \vert{} \Theta B \rangle = \langle B \vert{} A \rangle$):

<div>
$$\begin{aligned} W_n(x_1, \dots, x_n) &= \langle \Omega \vert{} \phi(x_1) \dots \phi(x_n) \vert{} \Omega \rangle \\ &= \langle \Theta \Omega \vert{} \Theta \phi(x_1) \dots \phi(x_n) \Omega \rangle^* \\ &= \langle \Omega \vert{} \phi^\dagger(-x_1) \dots \phi^\dagger(-x_n) \vert{} \Omega \rangle^* \\ &= \langle \Omega \vert{} \left( \phi^\dagger(-x_1) \dots \phi^\dagger(-x_n) \right)^\dagger \vert{} \Omega \rangle \\ &= \langle \Omega \vert{} \phi(-x_n) \dots \phi(-x_1) \vert{} \Omega \rangle \end{aligned}$$
</div>

Por lo tanto, la condición de invariancia CPT equivale a la relación entre funciones de Wightman:

$$W_n(x_1, x_2, \dots, x_n) \stackrel{?}{=} W_n(-x_n, \dots, -x_1)$$

### Paso 2: Extensión Analítica al Espacio de Bargmann

Por el **Axioma de Positividad de la Energía**, la transformada de Fourier de $W_n$ solo tiene soporte en el cono de luz futuro. Esto permite extender analíticamente las funciones $W_n(x_1, \dots, x_n)$ a variables complejas $z_k = x_k - i y_k$.

La función analítica $W\_n(z\_1, \dots, z\_n)$ es holomorfa en el dominio de Bargmann-Hall-Wightman donde los vectores $y\_k - y\_{k+1}$ pertenecen al cono de luz futuro.

### Paso 3: Aplicación de la Inversión Compleja de Lorentz

El grupo de Lorentz complejo $SO(1,3)_{\mathbb{C}}$ contiene la transformación de inversión total PT PT (o PT compleja):

<div>
$$\Lambda_{PT} = -\mathbb{I}_{4\times 4} = \begin{pmatrix} -1 & 0 & 0 & 0 \\ 0 & -1 & 0 & 0 \\ 0 & 0 & -1 & 0 \\ 0 & 0 & 0 & -1 \end{pmatrix}$$
</div>

Dado que $\det(\Lambda\_{PT}) = (-1)^4 = +1$, **$\Lambda\_{PT}$ forma parte de la componente conexa del grupo de Lorentz complejo $SO(1,3)\_{\mathbb{C}}$**, aunque la transformación PT real ($t \to -t, \mathbf{x} \to -\mathbf{x}$) no pertenezca a la componente conexa del grupo de Lorentz real $SO^+(1,3)$.

Por la **Invariancia de Lorentz Compleja** (extendida desde la invariancia de Lorentz real):

$$W_n(z_1, z_2, \dots, z_n) = W_n(-z_1, -z_2, \dots, -z_n)$$

Al tomar el límite real $y_k \to 0$:

$$W_n(x_1, x_2, \dots, x_n) = W_n(-x_1, -x_2, \dots, -x_n)$$

### Paso 4: Reordenamiento por Microcausalidad

El paso final consiste en relacionar $W_n(-x_1, \dots, -x_n)$ con $W_n(-x_n, \dots, -x_1)$.

Si los puntos están separados por intervalos tipo espacio, por el **Axioma de Microcausalidad** los operadores de campo conmutan:

$$\phi(-x_1) \phi(-x_2) \dots \phi(-x_n) = \phi(-x_n) \dots \phi(-x_2) \phi(-x_1)$$

Por lo tanto, en la región Jost de puntos separados por intervalos tipo espacio:

$$W_n(-x_1, -x_2, \dots, -x_n) = W_n(-x_n, \dots, -x_2, -x_1)$$

Por el **teorema del tubo de Bargmann-Hall-Wightman** (continuación analítica única), si dos funciones holomorfas coinciden en una región del espacio-tiempo, coinciden en todo el espacio. Por consiguiente:

$$W_n(x_1, x_2, \dots, x_n) = W_n(-x_n, \dots, -x_1)$$

---

## 4. Conclusión

Se ha demostrado que las funciones de correlación del vacío son idénticas a las transformadas por CPT. Dado que todos los observables de una teoría cuántica de campos (matriz $S$, secciones eficaces, anchuras de desintegración) se construyen a partir de las funciones de Wightman, **la teoría completa es invariante bajo CPT**.

### Consecuencias Directas e Inviolables

1. **Masa e Invariancia:** Toda partícula y su antipartícula tienen exactamente la **misma masa** y la **misma vida media**.
2. **Cargas Opuestas:** Las cargas cuánticas (eléctrica, bariónica, leptónica) de una antipartícula son exactamente opuestas a las de su partícula.
3. **Violación de C, P, CP o T:** Si una teoría viola la simetría $CP$ (como ocurre en la interacción débil en el Modelo Estándar), **debe violar la simetría $T$ exactamente en la misma medida** para preservar $CPT$.
