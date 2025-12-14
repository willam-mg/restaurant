export class Administrator {
  constructor(data = {}) {
    this.id = data.id ?? null;
    this.nombre_completo = data.nombre_completo ?? '';
    this.email = data.email ?? '';
  }
}
