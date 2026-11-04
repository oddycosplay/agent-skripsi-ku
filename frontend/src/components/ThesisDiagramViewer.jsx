import React, { useEffect, useRef } from 'react';
import mermaid from 'mermaid';

mermaid.initialize({ startOnLoad: true, theme: 'default', securityLevel: 'loose' });

export default function ThesisDiagramViewer({ title, mermaidCode, whiteBoxMetrics }) {
  const chartRef = useRef(null);

  useEffect(() => {
    if (chartRef.current && mermaidCode) {
      mermaid.render(`mermaid-svg-${Math.random().toString(36).substr(2, 9)}`, mermaidCode)
        .then(({ svg }) => {
          chartRef.current.innerHTML = svg;
        });
    }
  }, [mermaidCode]);

  return (
    <div className="p-6 bg-white rounded-xl shadow-md border border-slate-200 space-y-4">
      <h3 className="text-lg font-bold text-slate-800">{title}</h3>
      
      {/* Render Diagram Mermaid (Sequence / Activity / Flow Graph) */}
      <div ref={chartRef} className="overflow-x-auto p-4 bg-slate-50 rounded-lg flex justify-center" />

      {/* Tampilkan Detail Perhitungan White Box jika tersedia */}
      {whiteBoxMetrics && (
        <div className="mt-4 p-4 bg-indigo-50 rounded-lg border border-indigo-100 text-sm space-y-2">
          <p className="font-semibold text-indigo-900">
            Hasil Perhitungan Cyclomatic Complexity V(G) — {whiteBoxMetrics.module_name}
          </p>
          <div className="grid grid-cols-3 gap-2 text-indigo-800">
            <div>V(G) = R = <strong>{whiteBoxMetrics.regions_R}</strong></div>
            <div>V(G) = E - N + 2 = {whiteBoxMetrics.edges_E} - {whiteBoxMetrics.nodes_N} + 2 = <strong>{whiteBoxMetrics.cyclomatic_complexity_VG}</strong></div>
            <div>V(G) = P + 1 = {whiteBoxMetrics.predicates_P} + 1 = <strong>{whiteBoxMetrics.cyclomatic_complexity_VG}</strong></div>
          </div>
          <div className="pt-2">
            <p className="font-medium text-indigo-900">Independent Paths:</p>
            <ul className="list-disc list-inside font-mono text-xs text-slate-700">
              {whiteBoxMetrics.independent_paths.map((path, idx) => (
                <li key={idx}>{path}</li>
              ))}
            </ul>
          </div>
        </div>
      )}
    </div>
  );
}
